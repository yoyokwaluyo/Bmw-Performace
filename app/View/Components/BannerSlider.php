<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BannerSlider extends Component
{
    public $pages;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->pages = [
            [
                'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/2751-0ecb55284740ef1b7bd64af5af810cd3.jpg',
                'image_mob' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/BMW/banner_mobile/2751-34135d8a2a3023d32f30dc102c584fc0.jpg',
                'title' => 'Corporate Sales Program',
                'subtitle' => 'Provide Excellence  the Right Solution to Your Business',
                'button_link' => 'https://bmw-performancemotors.co.id/news/bmw-aml-corporate-sales-program-54',
                'button_name' => 'Find Out More'
            ],
            [
                'image' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/6698f00bf7e6a90eef1e7cac04d2d526.jpg',
                'image_mob' => 'https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/BMW/banner_mobile/43d5ffa92602805fb0c70264233f90ef.jpg',
                'title' => 'Booking Service.',
                'subtitle' => 'Every Model. Every Age. Are Welcome.',
                'button_link' => '/service',
                'button_name' => 'Find Out More.'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-slider');
    }
}
