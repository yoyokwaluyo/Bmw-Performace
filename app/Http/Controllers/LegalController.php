<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function legal(Request $request)
    {
        return view('pages.legal.legal');
    }

    public function privacy(Request $request)
    {
        return view('pages.legal.privacy-policy');
    }
}
