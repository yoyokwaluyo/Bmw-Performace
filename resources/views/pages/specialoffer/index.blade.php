@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="relative">
    <img src="{{ asset('image/image_header_spesial_offer.jpg') }}" alt="image" class="w-full h-[550px] object-cover hidden md:block">
    <img src="{{ asset('image/Bitmap1.jpg') }}" alt="image" class="w-full block md:hidden">

    <!-- <div class="absolute top-0 left-0 w-full h-full z-20 flex justify-center md:py-40">
        <div class="container md:w-[90%] mx-auto px-4">
            <div class="text-5xl font-bmwLight text-gray-100 mb-2">ALL NEWS.</div>
            <div class="text-2xl font-bmwLight text-gray-100">Follow BMW latest News.</div>
        </div>
    </div> -->
</div>

<div class="container md:w-[90%] mx-auto px-4">
    <div class="my-24 space-y-8">
        <div class="grid md:grid-cols-2 gap-4 md:gap-8">
            <div>
                <img data-src="{{ asset('image/Bitmap1.jpg') }}" class="lazy max-h-[300px] object-contain mx-auto">
            </div>
            <div class="space-y-4">
                <div class="text-lg font-bmwRegular">iXclusive Breakfast at Pison Cafe Thamrin: A Blend of Breakfast, BMW iX, and Sustainability.</div>
                <div class="text-sm">
                    An Exclusive Event on Saturday, October 28, 2023, Celebrates the Fusion of Luxury, Sustainability, and Thoughtful Conversations.
                </div>
                <div>
                    <a href="{{ route('specialoffer.form', ['id' => '21', 'slug' => \Str::slug('iXclusive Breakfast at Pison Cafe Thamrin: A Blend of Breakfast, BMW iX, and Sustainability.')]) }}" class="buttons blue rounded-none text-base min-w-60">
                        Read More
                    </a>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-4 md:gap-8">
            <div>
                <img data-src="{{ asset('image/Bitmap2.jpg') }}" class="lazy max-h-[300px] object-contain mx-auto">
            </div>
            <div class="space-y-4">
                <div class="text-lg font-bmwRegular">Sime Darby Motors Hadir di Indonesia</div>
                <div class="text-sm">
                    PT Performance Motors Indonesia menjadi Authorized Diler BMW di Jakarta dan Medan.
                </div>
                <div>
                    <a href="{{ route('specialoffer.form', ['id' => '31', 'slug' => \Str::slug('Sime Darby Motors Hadir di Indonesia')]) }}" class="buttons blue rounded-none text-base min-w-60">
                        Read More
                    </a>
                </div>
            </div>
        </div>
        <!-- Pagination -->
        <div>&nbsp;</div>
        <div class="">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li>
                        <a href="#" class="">
                            <span class="sr-only">Previous</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="">1</a>
                    </li>
                    <li>
                        <a href="#" class="">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="active">3</a>
                    </li>
                    <li>
                        <a href="#" class="">4</a>
                    </li>
                    <li>
                        <a href="#" class="">5</a>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection