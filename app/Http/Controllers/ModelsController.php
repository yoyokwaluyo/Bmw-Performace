<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            [
                'id' => '2314',
                'image' => 'https://rajamobil.s3.ap-southeast-1.amazonaws.com/image_custom_dealer/x5.png',
                'name' => 'BMW X5 xDrive40i xLine',
                'fuel' => 'Gasoline',
                'price' => 'Start from Rp 1.922.000.000',
                'link' => route("home")
            ],
            [
                'id' => '3312',
                'image' => 'https://rajamobil.s3.ap-southeast-1.amazonaws.com/image_custom_dealer/x3.png',
                'name' => 'BMW X3 xDrive20i',
                'fuel' => 'Gasoline',
                'price' => 'Start from Rp 1.310.000.000',
                'link' => route("home")
            ],
            [
                'id' => '4123',
                'image' => 'https://rajamobil.s3.ap-southeast-1.amazonaws.com/image_custom_dealer/3-2019.png',
                'name' => 'BMW 330i M Sport Pro',
                'fuel' => 'Gasoline',
                'price' => 'Start from Rp 1.240.000.000',
                'link' => route("home")
            ],
            [
                'id' => '2113',
                'image' => 'https://rajamobil.s3.ap-southeast-1.amazonaws.com/image_custom_dealer/5.png',
                'name' => 'BMW 520i M Sport',
                'fuel' => 'Gasoline',
                'price' => 'Start from Rp 1.275.000.000',
                'link' => route("home")
            ],
        ];

        return view('pages.models.index', compact('data'));
    }

    public function detail(Request $request)
    {
        return view('pages.models.detail');
    }

    public function spesifikasi(Request $request)
    {
        return view('pages.models.spesification');
    }

}
