<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsOfUseController extends Controller
{
    //

    public function index()
    {
        $title = "Terms of Use";
        return view('termsofuse', compact('title'));
    }
}
