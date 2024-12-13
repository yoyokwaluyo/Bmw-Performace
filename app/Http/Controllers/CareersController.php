<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.careers.index');
    }
}
