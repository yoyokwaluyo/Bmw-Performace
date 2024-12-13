@extends('layouts.app')

@section('style')
<!-- import another style file -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
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

<div class="container md:w-[90%] mx-auto px-4 py-12 space-y-14">
    <div class="content-text-detail">
        <p>The first all-electric Gran Coupé, the BMW i4 delivers outstanding dynamics with a high level of comfort and the ideal qualities to make it your daily driver. The five-door model comes equipped with fifth-generation BMW eDrive technology for sporty performance figures – reaching up to 340 hp. With a long range of up to 591 kilometres* and five spacious full-sized seats, it is the perfect companion for any journey.<br>
            <br>
            BMW i4 eDrive40⁽¹⁾:<br>
            Power consumption in km/kWh 100 km (combined): 4.5<br>
            CO2 emissions in g/km (combined): 0
        </p>
        <p>&nbsp;</p>
        <p>The values of the vehicles labelled with&nbsp;⁽¹⁾ are preliminary.</p>
    </div>

    <div class="grid grid-cols-2 gap-4 md:gap-10">
        <div>
            <img src="https://static.rajamobil.com/media/images/databasemobil/mobilbaru/color/1695116907-M_W.png" class="max-w-full object-contain">
        </div>
        <div class="display-colors">
            <p class="text-lg">Select your body color</p>
            <ul>
                <li>
                    <div id="a9158" class="bg-white" title="Mineral White"></div>
                </li>
                <li>
                    <div id="a9159" class="bg-black" title="Black Sapphire"></div>
                </li>
                <li>
                    <div id="a9160" class="bg-[#47060f]" title="BMW Individual Aventurine Red Metallic"></div>
                </li>
                <li>
                    <div id="a9161" class="bg-[#474b4e]" title="BMW Individual Dravit Grey Metallic"></div>
                </li>
                <li>
                    <div id="a9162" class="bg-[#1c233c]" title="BMW Individual Tanzanite Blue Metallic"></div>
                </li>
                <li>
                    <div id="a9163" class="bg-[#204920]" title="Sanremo Green Metallic"></div>
                </li>
            </ul>
            <p class="font-bmwBold text-xl">Mineral White</p>
        </div>
    </div>

    <div>
        <div id="accordion-detail" class="accordion-content" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900" data-inactive-classes="text-gray-700">
            <h2 id="accordion-detail-heading-1">
                <button type="button" class="" data-accordion-target="#accordion-detail-body-1" aria-expanded="true" aria-controls="accordion-detail-body-1">
                    <span>THE BMW i4 eDRIVE40 DELIVERS A RANGE OF UP TO 520 KM.*</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-detail-body-1" class="hidden" aria-labelledby="accordion-detail-heading-1">
                <div class="accordion-content-text">
                    <div>
                        <div class="">
                            <p><span>Thanks to the interplay of an efficient drivetrain concept, lightweight construction, aerodynamic design, and a powerful high-voltage battery, the BMW i4 reaches ranges of up to 520 km Innovative technologies, such as brake energy recovery, help to extend the range and reduce energy consumption to 4.5 km/kWh.</span></p>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <a href="{{ asset('image/image_BMW_after_sales.jpg') }}" data-fancybox="detail-1">
                            <img src="{{ asset('image/image_BMW_after_sales.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_BMW_campaign_.jpg') }}" data-fancybox="detail-1">
                            <img src="{{ asset('image/image_BMW_campaign_.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_BMW_Premium.jpg') }}" data-fancybox="detail-1">
                            <img src="{{ asset('image/image_BMW_Premium.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_BMW_campaign_.jpg') }}" data-fancybox="detail-1">
                            <img src="{{ asset('image/image_BMW_campaign_.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_BMW_Premium.jpg') }}" data-fancybox="detail-1">
                            <img src="{{ asset('image/image_BMW_Premium.jpg') }}" />
                        </a>
                    </div>
                </div>
            </div>
            <h2 id="accordion-detail-heading-2">
                <button type="button" class="" data-accordion-target="#accordion-detail-body-2" aria-expanded="false" aria-controls="accordion-detail-body-2">
                    <span>CHARGING TIMES FOR 100 KM RANGE.</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-detail-body-2" class="hidden" aria-labelledby="accordion-detail-heading-2">
                <div class="accordion-content-text">
                    <div>
                        <div class="text-justify content-detail_1" style="overflow: hidden; height: 250px;">
                            <div class="ds2-showroom-multicontent__item-body">
                                <h4>Charging at home for a range of 100 km.</h4>

                                <div class="ds2-cms-output ds2-showroom-multicontent__item-text"><strong>01:23 h</strong> – Wallbox (11 kW)<br>
                                    <br>
                                    <strong>01:23 h</strong> – Flexible Fast Charger (11kW) on industrial socket<br>
                                    <br>
                                    <strong>07:01 h</strong> – Standard charging cable or Flexible Fast Charger (2.3 kW) on household socket
                                </div>
                                <a class="ds2-link ds2-icon ds2-icon--arrow-big-r-blue-2 ds2-showroom-multicontent__item-link ds2-tracking-js--event" href="/en/fastlane/dealer-locator.html" tabindex="-1" target="_self">Contact dealer for charging solutions </a>
                            </div>

                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <a href="{{ asset('image/image_spesial_offer_1.jpg') }}" data-fancybox="detail-2">
                            <img src="{{ asset('image/image_spesial_offer_1.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_spesial_offer_2.jpg') }}" data-fancybox="detail-2">
                            <img src="{{ asset('image/image_spesial_offer_2.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_spesial_offer_3.jpg') }}" data-fancybox="detail-2">
                            <img src="{{ asset('image/image_spesial_offer_3.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_spesial_offer_2.jpg') }}" data-fancybox="detail-2">
                            <img src="{{ asset('image/image_spesial_offer_2.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_spesial_offer_3.jpg') }}" data-fancybox="detail-2">
                            <img src="{{ asset('image/image_spesial_offer_3.jpg') }}" />
                        </a>
                    </div>
                </div>
            </div>
            <h2 id="accordion-detail-heading-3">
                <button type="button" class="" data-accordion-target="#accordion-detail-body-3" aria-expanded="false" aria-controls="accordion-detail-body-3">
                    <span>CHARGING THE BMW i4: EASIER THAN EVER.</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-detail-body-3" class="hidden" aria-labelledby="accordion-detail-heading-3">
                <div class="accordion-content-text">
                    <div>
                        <div class="text-justify content-detail_2" style="overflow: hidden; height: 250px;">
                            <p><span style="color:rgb(38, 38, 38); font-family:bmwtypenextweb,arial,helvetica,sans-serif; font-size:16px">Charging the BMW i4 couldn't be easier. The Connected Charging service helps you find the nearest charging station along your route, so you can charge your BMW i4 when you need to – and go from a 10 to 80% charge in just 31 minutes with up to 205 kW of charging power. Or you recharge up to 164 km range in only 10 minutes At home, you have the convenience of using your BMW Wallbox. With up to 11 kW, it brings the battery of the BMW i4 back to 100% charge in just 8,25 hours. The BMW Flexible Fast Charger for home use, the charging cable for public charging, and the BMW Charging Card for access to the public charging network are included with purchase.</span></p>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <a href="{{ asset('image/image_spesial_offer_1.jpg') }}" data-fancybox="detail-3">
                            <img src="{{ asset('image/image_spesial_offer_1.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_spesial_offer_2.jpg') }}" data-fancybox="detail-3">
                            <img src="{{ asset('image/image_spesial_offer_2.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_spesial_offer_3.jpg') }}" data-fancybox="detail-3">
                            <img src="{{ asset('image/image_spesial_offer_3.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_spesial_offer_2.jpg') }}" data-fancybox="detail-3">
                            <img src="{{ asset('image/image_spesial_offer_2.jpg') }}" />
                        </a>
                        <a href="{{ asset('image/image_spesial_offer_3.jpg') }}" data-fancybox="detail-3">
                            <img src="{{ asset('image/image_spesial_offer_3.jpg') }}" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        let arr = ['detail-1', 'detail-2', 'detail-3', 'detail-4'];
        arr.forEach(element => {
            Fancybox.bind('[data-fancybox="' + element + '"]', {
                Thumbs: {
                    type: "modern"
                }
            });
        });
    });
</script>
@endsection