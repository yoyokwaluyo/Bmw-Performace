@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div>
    <img src="{{ asset('image/banner_contact_us.jpg') }}" alt="image" class="w-full h-[550px] object-cover hidden md:block">
    <img src="https://ramo-statics.s3-ap-southeast-1.amazonaws.com/images/banner_slider/BMW/banner_mobile/Career_Mobile.jpg" alt="image" class="w-full block md:hidden">
</div>

<div class="container md:w-[90%] mx-auto px-4">
    <div class="my-10 space-y-8">
        <div>
            <div class="text-xl font-bmwBold mb-2">Contact BMW Performance Motors</div>
            <div>We are looking forward to your questions or comments.</div>
        </div>
        <div class="grid grid-cols-2">
            <div>
                <div class="mb-3">For Marketing Inquiry :</div>
                <div class="flex items-center mb-2">
                    <div class="min-w-[200px] font-bmwBold">Monday to Friday</div>
                    <div class="font-bmwBold">:09.00 AM - 06.00 PM</div>
                </div>
                <div class="flex items-center">
                    <div class="min-w-[200px] font-bmwBold">Saturday to Sunday</div>
                    <div class="font-bmwBold">: Closed</div>
                </div>
            </div>
            <div>
                <div class="mb-3">For Marketing Inquiry :</div>
                <div>
                    <div class="font-bmwBold">0 800 1 269 265</div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <div class="">
                <a href="/test-drive" class="buttons w-full p-4 py-5 bg-gray-50 shadow-md text-black/80 rounded-sm hover:bg-gray-200">
                    <img data-src="{{ asset('image/icon/icon_test_drive_(dark_grey).svg') }}" class="lazy w-6">
                    <span>Test Drive</span>
                </a>
            </div>
            <div class="">
                <a href="tel:+622130121201" class="buttons w-full p-4 py-5 bg-gray-50 shadow-md text-black/80 rounded-sm hover:bg-gray-200">
                    <img data-src="{{ asset('image/icon/icon_phone.svg') }}" class="lazy w-6">
                    <span>(021) 30121201</span>
                </a>
            </div>
            <div class="">
                <a href="https://wa.me/628111099269" class="buttons w-full p-4 py-5 bg-gray-50 shadow-md text-black/80 rounded-sm hover:bg-gray-200">
                    <img data-src="{{ asset('image/whatsapp.svg') }}" class="lazy w-6">
                    <span>+628111099269</span>
                </a>
            </div>
            <div class="">
                <a href="mailto:enquire@bmw-performancemotors.co.id" class="buttons w-full p-4 py-5 bg-gray-50 shadow-md text-black/80 rounded-sm hover:bg-gray-200">
                    <img data-src="{{ asset('image/email.svg') }}" class="lazy w-6">
                    <span>enquire@bmw-performancemotors.co.id</span>
                </a>
            </div>
        </div>
        <div>&nbsp;</div>
        <div>
            <div class="text-xl font-bmwBold mb-6">Operating/Opening Hours BMW Performance Motors</div>
            <div class="grid grid-cols-3 gap-y-8">
                <div>
                    <div class="mb-4">Showroom BMW Performance Motors Thamrin :</div>
                    <div class="flex items-center mb-2">
                        <div class="min-w-[200px] font-bmwBold">Monday to Saturday</div>
                        <div class="font-bmwBold">: 09.00 AM - 08.00 PM</div>
                    </div>
                    <div class="flex items-center">
                        <div class="min-w-[200px] font-bmwBold">Sunday</div>
                        <div class="font-bmwBold">: 10.00 AM - 04.00 PM</div>
                    </div>
                </div>
                <div>
                    <div class="mb-4">Showroom BMW Performance Motors Medan :</div>
                    <div class="flex items-center mb-2">
                        <div class="min-w-[200px] font-bmwBold">Monday to Friday</div>
                        <div class="font-bmwBold">: 09.00 AM - 05.00 PM</div>
                    </div>
                    <div class="flex items-center">
                        <div class="min-w-[200px] font-bmwBold">Saturday to Sunday</div>
                        <div class="font-bmwBold">: 10.00 AM - 04.00 PM</div>
                    </div>
                </div>
                <div>
                    <div class="mb-4">BMW Studio Sentul :</div>
                    <div class="flex items-center mb-2">
                        <div class="min-w-[200px] font-bmwBold">Everyday</div>
                        <div class="font-bmwBold">: 10.00 AM - 10.00 PM</div>
                    </div>
                </div>
                <div>
                    <div class="mb-4">Workshop BMW Performance Motors Thamrin :</div>
                    <div class="flex items-center mb-2">
                        <div class="min-w-[200px] font-bmwBold">Monday to Friday</div>
                        <div class="font-bmwBold">: 09.00 AM - 05.00 PM</div>
                    </div>
                    <div class="flex items-center">
                        <div class="min-w-[200px] font-bmwBold">Saturday</div>
                        <div class="font-bmwBold">: 09.00 AM - 03.00 PM</div>
                    </div>
                </div>
                <div>
                    <div class="mb-4">Workshop BMW Performance Motors Medan :</div>
                    <div class="flex items-center mb-2">
                        <div class="min-w-[200px] font-bmwBold">Monday to Friday</div>
                        <div class="font-bmwBold">: 08.30 AM - 04.30 PM</div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="min-w-[200px] font-bmwBold">Saturday</div>
                        <div class="font-bmwBold">: 08.30 AM - 02.30 PM</div>
                    </div>
                    <div class="flex items-center">
                        <div class="min-w-[200px] font-bmwBold">Sunday</div>
                        <div class="font-bmwBold">: Closed</div>
                    </div>
                </div>
            </div>
        </div>
        <div>&nbsp;</div>
        <div class="space-y-4">
            <p>Disclaimer :</p>
            <p>
                BMW Performance Motors may disclose your information to our service providers and agents for the purpose of processing, administration, marketing, credit checking, host mailing, statistical analysis, customer service and improving our services.
            </p>
            <p>
                For more information please visit the
                <a href="{{ route('privacy') }}" class="text-sm font-bmwBold">
                    <u>Privacy Policy page.</u>
                </a>
            </p>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection