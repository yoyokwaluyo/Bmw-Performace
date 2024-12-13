<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestDriveController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.testdrive.index');
    }
}
