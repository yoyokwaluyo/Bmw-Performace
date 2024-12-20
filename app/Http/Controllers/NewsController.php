<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.news.index');
    }

    public function detail(Request $request)
    {
        return view('pages.news.detail');
    }
}
