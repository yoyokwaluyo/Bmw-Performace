@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="relative">
    <img src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/image_custom_dealer/image_detail_model_custom_dealer/330-320.jpg" alt="image" class="w-full h-[550px] object-cover hidden md:block">
    <img src="https://ramo-statics.s3-ap-southeast-1.amazonaws.com/images/banner_slider/BMW/banner_mobile/Career_Mobile.jpg" alt="image" class="w-full block md:hidden">

    <div class="absolute top-0 left-0 w-full h-full z-20 flex justify-center md:py-40">
        <div class="container md:w-[90%] mx-auto px-4">
            <div class="text-5xl font-bmwLight text-gray-100 mb-2">DRIVING THE LEGEND.</div>
            <div class="text-2xl font-bmwLight text-gray-100">The All-New BMW 3 Series.</div>
        </div>
    </div>
</div>

@include("pages.models._tab-detail")

<div class="container md:w-[90%] mx-auto px-4 py-12">
    <div id="accordion-spec" class="accordion-content" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900" data-inactive-classes="text-gray-700">
        <h2 id="accordion-spec-heading-1">
            <button type="button" class="" data-accordion-target="#accordion-spec-body-1" aria-expanded="true" aria-controls="accordion-spec-body-1">
                <span>ENGINE</span>
                <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-spec-body-1" class="hidden" aria-labelledby="accordion-spec-heading-1">
            <div class="accordion-content-text">
                <div class="col-span-2">
                    <div class="overflow-auto">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Bore x Stroke (mm)</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Compression Ratio</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Cylinder</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Engine Volume (CC)</td>
                                    <td><strong>0</strong></td>
                                </tr>
                                <tr>
                                    <td>Fuel System</td>
                                    <td><strong>Electric</strong></td>
                                </tr>
                                <tr>
                                    <td>Fuel Type</td>
                                    <td><strong>Lithium-ion Battery</strong></td>
                                </tr>
                                <tr>
                                    <td>Max. Power (hp/rpm)</td>
                                    <td><strong>340</strong></td>
                                </tr>
                                <tr>
                                    <td>Max. Torque (Nm/rpm)</td>
                                    <td><strong>430</strong></td>
                                </tr>
                                <tr>
                                    <td>Engine Type</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Wheel Drive System</td>
                                    <td><strong></strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <h2 id="accordion-spec-heading-2">
            <button type="button" class="" data-accordion-target="#accordion-spec-body-2" aria-expanded="false" aria-controls="accordion-spec-body-2">
                <span>TRANSMISSION</span>
                <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-spec-body-2" class="hidden" aria-labelledby="accordion-spec-heading-2">
            <div class="accordion-content-text">
                <div class="col-span-2">
                    <div class="overflow-auto">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Gear Ratio 1st</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Gear Ratio 2nd</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Gear Ratio 3rd</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Gear Ratio 4th</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Gear Ratio 5th</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Gear Ratio 6th</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Gear Ratio 7th</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Gear Ratio 8th</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Gear Ratio Reverse</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Final Gear Ratio</td>
                                    <td><strong></strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <h2 id="accordion-spec-heading-3">
            <button type="button" class="" data-accordion-target="#accordion-spec-body-3" aria-expanded="false" aria-controls="accordion-spec-body-3">
                <span>EXTERIOR</span>
                <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-spec-body-3" class="hidden" aria-labelledby="accordion-spec-heading-3">
            <div class="accordion-content-text">
                <div class="col-span-2">
                    <div class="overflow-auto">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Body Color Door Handle</td>
                                    <td><strong>Yes</strong></td>
                                </tr>
                                <tr>
                                    <td>CHMSL</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Electric Mirrors</td>
                                    <td><strong>Yes</strong></td>
                                </tr>
                                <tr>
                                    <td>Electric Front Windows</td>
                                    <td><strong>Yes</strong></td>
                                </tr>
                                <tr>
                                    <td>Electric Rear Windows</td>
                                    <td><strong>Yes</strong></td>
                                </tr>
                                <tr>
                                    <td>Electric Sunroof</td>
                                    <td><strong>Yes</strong></td>
                                </tr>
                                <tr>
                                    <td>Fog Lamps</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Front Wiper</td>
                                    <td><strong>Yes</strong></td>
                                </tr>
                                <tr>
                                    <td>Grille Chrome</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Lips Front Bumper</td>
                                    <td><strong>Yes</strong></td>
                                </tr>
                                <tr>
                                    <td>Lips Rear Bumper</td>
                                    <td><strong>Yes</strong></td>
                                </tr>
                                <tr>
                                    <td>Side Skirt</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Manual Sunroof</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Muffler Tail Pipe Chrome</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>OSRVM</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Roof Rail</td>
                                    <td><strong></strong></td>
                                </tr>
                                <tr>
                                    <td>Rear Wiper</td>
                                    <td><strong></strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection