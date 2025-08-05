<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateGovernanceController extends Controller
{
    public function index()
    {
        // returns your blade view
        return view('pages.corporate-governance');
    }
}
