Your order has been successfully placed! Thank you for relying on us with your health. We will rely on you with your wealth :P
@php
$tests = $invoice->tests;
@endphp
<style>
table, th, td {
  border:1px solid black;
}
</style>
<table>
    <tr>
        <td>Test ID</td>
        <td>Test Name</td>
        <td>Amount</td>
        <td>Quantity</td>
        <td>Total Amount</td>

    </tr>
    @foreach($tests as $test)
    <tr>
        <td>{{$test->id}}</td>
        <td> {{$test->test->test_name}}</td>
        <td>{{$test->amount}}</td>
        <td>{{$test->quantity}}</td>
        <td>{{$test->total_amount}}</td>


    </tr>
    @endforeach
    
</table>


