@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div>
    <img src="https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner/price-desktop.jpg" alt="image" class="w-full h-[500px] object-cover">
</div>

<div class="shadow-md">
    <div class="flex items-center justify-between py-4 container md:w-[90%] mx-auto px-4">
        <div class="font-bmwBold">Pricelist</div>
        <div>
            <a href="{{ route('contact') }}" class="buttons blue rounded-none mx-auto text-base min-w-60">Contact</a>
        </div>
    </div>
</div>

<div class="container md:w-[90%] mx-auto px-4 my-10">
    <div class="font-bmwBold text-xl">BMW MODEL RANGE 2024. *</div>
    <div class="mt-2">Pricelist and specifications are as per Dec 2024 and are subject to change without prior notice.</div>

    <div class="overflow-x-scroll overflow-y-hidden mt-10">
        <table class="table table-borderless">
            <thead class="border border-b-0 border-gray-200">
                <tr class="caption-tbl-pricelist">
                    <th scope="col" class="text-bmw-bold">Models</th>
                    <th scope="col" class="text-bmw-bold">cc/PS</th>
                    <th scope="col" class="text-bmw-bold text-end">On The Road</th>
                </tr>
            </thead>

            <tbody class="border border-gray-200">
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE 2 COUPÉ </div>
                    </td>
                </tr>
                <tr>
                    <td>220i Coupé M Sport </td>
                    <td>1998 / 184</td>
                    <td class="text-end">1.338.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE 2 GRAND COUPÉ</div>
                    </td>
                </tr>
                <tr>
                    <td>218i Gran Coupé Sport </td>
                    <td>1499 / 140</td>
                    <td class="text-end">880.000.000 </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE NEW 3</div>
                    </td>
                </tr>
                <tr>
                    <td>330i M Sport</td>
                    <td>1998 / 258</td>
                    <td class="text-end">1.240.000.000 </td>
                </tr>
                <tr>
                    <td>320i Sport</td>
                    <td>1998 / 184</td>
                    <td class="text-end">1.080.000.000 </td>
                </tr>
                <tr>
                    <td>320i M Sport</td>
                    <td>1998 / 184</td>
                    <td class="text-end">1.130.000.000 </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE NEW 4</div>
                    </td>
                </tr>
                <tr>
                    <td>430i Coupé M Sport Pro</td>
                    <td>1998 / 258</td>
                    <td class="text-end">1.635.000.000 </td>
                </tr>
                <tr>
                    <td>430i Convertible M Sport</td>
                    <td>1998 / 258</td>
                    <td class="text-end">1.780.000.000 </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE NEW 5</div>
                    </td>
                </tr>
                <tr>
                    <td>530i Opulence</td>
                    <td>1998 / 252</td>
                    <td class="text-end">1.525.000.000 </td>
                </tr>
                <tr>
                    <td>520i M Sport</td>
                    <td>1998 / 184</td>
                    <td class="text-end">1.275.000.000 </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE 7</div>
                    </td>
                </tr>
                <tr>
                    <td>735i M Sport</td>
                    <td>2998 / 286</td>
                    <td class="text-end">2.387.000.000 </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE 8</div>
                    </td>
                </tr>
                <tr>
                    <td>840i Gran Coupé M Sport Pro</td>
                    <td>2998 / 340</td>
                    <td class="text-end">2.968.000.000 </td>
                </tr>

                <tr>
                    <td>840i Coupé M Sport Pro</td>
                    <td>2998 / 340</td>
                    <td class="text-end">2.908.000.000 </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE iX</div>
                    </td>
                </tr>
                <tr>
                    <td>iX xDrive40 Sport</td>
                    <td>0 / 0</td>
                    <td class="text-end">2.398.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE i4</div>
                    </td>
                </tr>
                <tr>
                    <td>i4 eDrive40 M Sport</td>
                    <td>0 / 0</td>
                    <td class="text-end">2.108.000.000 </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE NEW M3</div>
                    </td>
                </tr>
                <tr>
                    <td>M3 Competition</td>
                    <td>2993 / 510</td>
                    <td class="text-end">2.498.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">The M8</div>
                    </td>
                </tr>
                <tr>
                    <td>M8 Coupé Competition</td>
                    <td>1998 / 306</td>
                    <td class="text-end">7.780.000.000 </td>
                </tr>
                <tr>
                    <td>M8 Gran Coupé Competition</td>
                    <td>4395 / 625</td>
                    <td class="text-end">7.715.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE NEW M4</div>
                    </td>
                </tr>

                <tr>
                    <td>M4 Convertible Competition M xDrive</td>
                    <td>2993 / 510</td>
                    <td class="text-end">2.919.000.000 </td>
                </tr>
                <tr>
                    <td>M4 Coupé Competition</td>
                    <td>2993 / 510</td>
                    <td class="text-end">2.568.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE X4 M</div>
                    </td>
                </tr>
                <tr>
                    <td>X4 M Competition</td>
                    <td>2993 / 510</td>
                    <td class="text-end">2.598.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE X3 M</div>
                    </td>
                </tr>
                <tr>
                    <td>X3 M Competition</td>
                    <td>2993 / 510</td>
                    <td class="text-end">2.538.000.000 </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE X3</div>
                    </td>
                </tr>
                <tr>
                    <td>X3 sDrive20i xLine</td>
                    <td>1998 / 184</td>
                    <td class="text-end">1.310.000.000 </td>
                </tr>
                <tr>
                    <td>X3 xDrive30i M Sport</td>
                    <td>1998 / 252</td>
                    <td class="text-end">1.440.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE X4</div>
                    </td>
                </tr>
                <tr>
                    <td>X4 xDrive30i M Sport X</td>
                    <td>2998 / 252</td>
                    <td class="text-end">1.698.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE X5</div>
                    </td>
                </tr>
                <tr>
                    <td>X5 xDrive40i xLine</td>
                    <td>2993 / 340</td>
                    <td class="text-end">1.922.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE X6</div>
                    </td>
                </tr>
                <tr>
                    <td>X6 xDrive40i M Sport</td>
                    <td>2998 / 340</td>
                    <td class="text-end">2.278.000.000 </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="font-bmwBold">THE X7</div>
                    </td>
                </tr>
                <tr>
                    <td>X7 xDrive40i M Sport</td>
                    <td>2998 / 381</td>
                    <td class="text-end">2.729.000.000 </td>
                </tr>
                <tr class="border-b border-gray-200">
                    <td colspan="3"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="font-bmwBold mt-10 space-y-2">
        <div>* &nbsp;&nbsp;&nbsp;&nbsp;The recommended on-the-road prices are based on DKI Jakarta government tax regulation and 1st car registration.</div>
        <div>**&nbsp;&nbsp;&nbsp;Prices on some models do not include WHT22 extra luxury tax for cars above IDR 2 billion or engine displacement above 3,000 cc</div>
        <div>*** Applicable for Jakarta registration only</div>
        <div class="font-bmwLight">Prices and specifications are as per Dec 2024 and subject to change with new government regulations on taxes and duties without prior notice. Please contact your Business Consultant for further information on prices and specifications.</div>
    </div>
    <div class="mt-8 space-y-4">
        <div>
            <div class="font-bmwBold">PT Performance Motors Indonesia</div>
            <div class="font-bmwBold">Plaza Galeon</div>
        </div>
        <div>
            Jl. M.H. Thamrin Kav 8-9 <br>
            Jakarta 10230 <br>
            Indonesia
        </div>
        <div>
            Telp. +62 21 3012 1201 <br>
            WA. +62 81 1109 9269 (9BMW)
        </div>
        <div>
            <a href="https://rajamobil.s3.ap-southeast-1.amazonaws.com/brochure-and-pricelist/9L92rmIZObF6S31Wp6UFUwqpQPSkcRRpnGlT8wxn.pdf" class="buttons blue rounded-none text-base min-w-60">
                <i class='bx bxs-download'></i>
                Download Pricelist
            </a>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection