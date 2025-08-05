<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreFunctionsController extends Controller
{
    public function index()
    {
        // return the relevant view
        return view('pages.core-functions');
    }
}
