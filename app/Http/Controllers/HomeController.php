<?php

namespace App\Http\Controllers;

use App\Models\User;  // Make sure the User model is imported
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // The index method should be defined like this
    public function index()
    {
        // Fetch users from the database
        $users = User::all();

        // Pass the users to the view
        return view('pages.home', compact('users'));
    }
}
