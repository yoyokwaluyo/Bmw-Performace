<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class FeaturedModels extends Component
{
    public $cars;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cars = [
            [
                'id' => '2314',
                'image' => 'https://rajamobil.s3.ap-southeast-1.amazonaws.com/image_custom_dealer/x5.png',
                'name' => 'BMW X5 xDrive40i xLine',
                'fuel' => 'Gasoline',
                'price' => 'Start from Rp 1.922.000.000',
                'link' => route('model_detail', ['slug' => Str::slug('BMW X5 xDrive40i xLine'), 'type_id' => '2123'])
            ],
            [
                'id' => '3312',
                'image' => 'https://rajamobil.s3.ap-southeast-1.amazonaws.com/image_custom_dealer/x3.png',
                'name' => 'BMW X3 xDrive20i',
                'fuel' => 'Gasoline',
                'price' => 'Start from Rp 1.310.000.000',
                'link' => route('model_detail', ['slug' => Str::slug('BMW X3 xDrive20i'), 'type_id' => '2123'])
            ],
            [
                'id' => '4123',
                'image' => 'https://rajamobil.s3.ap-southeast-1.amazonaws.com/image_custom_dealer/3-2019.png',
                'name' => 'BMW 330i M Sport Pro',
                'fuel' => 'Gasoline',
                'price' => 'Start from Rp 1.240.000.000',
                'link' => route('model_detail', ['slug' => Str::slug('BMW 330i M Sport Pro'), 'type_id' => '2123'])
            ],
            [
                'id' => '2113',
                'image' => 'https://rajamobil.s3.ap-southeast-1.amazonaws.com/image_custom_dealer/5.png',
                'name' => 'BMW 520i M Sport',
                'fuel' => 'Gasoline',
                'price' => 'Start from Rp 1.275.000.000',
                'link' => route('model_detail', ['slug' => Str::slug('BMW 520i M Sport'), 'type_id' => '2123'])
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featured-models');
    }
}
