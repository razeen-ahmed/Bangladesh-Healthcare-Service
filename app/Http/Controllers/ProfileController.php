<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user(); // Retrieve the authenticated user
        return view('profile.show', compact('user')); // Point to the show.blade.php view inside the profile folder
    }
}
