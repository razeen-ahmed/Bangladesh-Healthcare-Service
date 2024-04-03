<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tests;

class TestController extends Controller
{
    public function index()
    {
        // Logic to fetch and display all tests
    }

    public function show($id)
    {
        // Logic to fetch and display a specific test by ID
    }

    public function store(Request $request)
    {
        // Logic to validate and store a new test
    }

    public function update(Request $request, $id)
    {
        // Logic to validate and update an existing test
    }

    public function destroy($id)
    {
        $test = tests::findOrFail($id);
        $test->delete();
    
        return redirect()->back()->with('message', 'Test deleted successfully.');
    }
    
}
