<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\tests;
use Illuminate\Support\Facades\Session;
use App\Models\Invoice;
use App\Models\InvoiceTest;
use App\Mail\SampleMail;
use App\Models\SelfReport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CartController extends Controller
{
  public function addToCart(Request $request, $id)
  {

    $test = tests::find($id);

    if (!$test) {
      return redirect()->back()->with('error', 'Test not found.');
    }

    $cart = session()->get('new_cart', []);

    if (!isset($cart[$id])) {
      $cart[$id] = 1;
    } else {
      $cart[$id] = (int)$cart[$id] + 1;
    }

    session()->put("new_cart", $cart);
    //dd($cart);
    return redirect()->back()->with('success', 'Test added to cart successfully!');
  }

  public function removeToCart(Request $request, $id)
  {

    $test = tests::find($id);

    if (!$test) {
      return redirect()->back()->with('error', 'Test not found.');
    }

    $cart = session()->get('new_cart', []);

    if (isset($cart[$id])) {
      unset($cart[$id]);
    }

    session()->put("new_cart", $cart);
    //dd($cart);
    return redirect()->back()->with('success', 'Test added to cart successfully!');
  }

  public function checkout()
  {
    $invoice = Invoice::create([
      "user_id" => auth()->user()->id
    ]);
    $cart = session()->get("new_cart");
    if (empty($cart)) {
      return redirect()->back()->with('No item');
    }

    $testCarts = tests::whereIn('id', array_keys($cart))->get()->map(function ($test) use ($cart) {
      $test->quantity = $cart[$test->id];
      $test->total = $test->quantity * $test->price;
      return $test;
    });

    foreach ($testCarts as $testCart) {
      $invoiceTest = InvoiceTest::create([
        "invoice_id" => $invoice->id,
        "test_id" => $testCart->id,
        "amount" => $testCart->price,
        "quantity" => $testCart->quantity,
        "total_amount" => $testCart->total,

      ]);
    }
    session()->forget("new_cart");
    $content = [
      'subject' => 'Your Order ID:' . $invoice->id,
      'body' => 'Your order has been created for the invoice' . $invoice->id . 'Total price:' . $testCart->total
    ];

    //return view('emails.order_confirm',['content'=>$content, "invoice" => $invoice]);

    Mail::to(auth()->user()->email)->send(new SampleMail($content, $invoice));
    return redirect()->back()->with('Your Order has been Placed!');
  }

  public function uploadPatientReport(Request $request) {
    
    $request->validate([
      'report_file' => 'required|max:2048',
    ]);
    
    $file = $request->file('report_file');
    $randomFileName = Str::random(40);
    $fileExtension = $file->getClientOriginalExtension();
    $fileName = $randomFileName . '.' . $fileExtension;
    
    $filePath = $file->move('report', $fileName);
    $selfReport = SelfReport::create([
      "fileName" => $fileName,
      'user_id' => auth()->user()->id
    ]);

    return "File uploaded successfully!";
  }

  public function seePatientReport() {

    $reports = SelfReport::where('user_id', auth()->user()->id)->get();

    return view("user.see_patient_report", compact("reports"));
  }
}
