<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialOfferController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.specialoffer.index');
    }

    public function formoffers(Request $request)
    {
        return view('pages.specialoffer.form');
    }

    public function aftersales(Request $request)
    {
        return view('pages.specialoffer.aftersales');
    }

    public function aftersalesDetail(Request $request)
    {
        return view('pages.specialoffer.aftersales-detail');
    }
}
