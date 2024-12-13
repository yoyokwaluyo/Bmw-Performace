@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="container md:w-[90%] mx-auto px-4">
    <div class="my-28 md:my-40">
        <div class="font-bmwRegular text-xl mb-4">SITE MAP</div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">Home Page</h5>
                <a href="https://www.bmw-performancemotors.co.id" class="font-bmwRegular hover:text-sky-600 transition-all duration-150 ease-in">www.BMW-PERFORMANCEMOTORS.co.id</a>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">Models</h5>
                <p>
                    <a href="https://www.bmw-performancemotors.co.id/model" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        All Models
                    </a>
                </p>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">BMW </h5>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW Seri i4 eDrive40 M Sport
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-seri-i4-edrive40-m-sport-indonesia-8060.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-seri-i4-edrive40-m-sport-indonesia-8060.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW Seri i7 xDrive60 Gran Lusso
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-seri-i7-xdrive60-gran-lusso-indonesia-8061.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-seri-i7-xdrive60-gran-lusso-indonesia-8061.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW Seri iX xDrive40 Sport
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-seri-ix-xdrive40-sport-indonesia-8062.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-seri-ix-xdrive40-sport-indonesia-8062.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">BMW </h5>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 218i Gran Coupé Sport
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-218i-gran-coupe-sport-indonesia-7752.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-218i-gran-coupe-sport-indonesia-7752.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">BMW 3 Series</h5>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 320i M Sport
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-320i-m-sport-indonesia-4931.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-320i-m-sport-indonesia-4931.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 330i M Sport Pro
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-330i-m-sport-pro-indonesia-6705.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-330i-m-sport-pro-indonesia-6705.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 320i Touring M Sport
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-320i-touring-m-sport-indonesia-7685.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-320i-touring-m-sport-indonesia-7685.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">BMW 4 Series</h5>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 430i Convertible M Sport
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-430i-convertible-m-sport-indonesia-7309.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-430i-convertible-m-sport-indonesia-7309.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 430i Coupé M Sport Pro
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-430i-coupe-m-sport-pro-indonesia-7308.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-430i-coupe-m-sport-pro-indonesia-7308.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">BMW 5 Series</h5>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 520i M Sport
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-520i-m-sport-indonesia-1108.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-520i-m-sport-indonesia-1108.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 530i Opulence
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-530i-opulence-indonesia-7350.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-530i-opulence-indonesia-7350.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 5 Touring M Sport
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-5-touring-m-sport-indonesia-7820.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-5-touring-m-sport-indonesia-7820.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">BMW 7 Series</h5>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 730Li M Sport
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-730li-m-sport-indonesia-6118.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-730li-m-sport-indonesia-6118.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">BMW 8 Series</h5>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 840i Gran Coupé M Technic
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-840i-gran-coupe-m-technic-indonesia-7324.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-840i-gran-coupe-m-technic-indonesia-7324.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW 840i Coupé M Technic
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-840i-coupe-m-technic-indonesia-7325.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-840i-coupe-m-technic-indonesia-7325.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">BMW X</h5>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW X1 sDrive18i Dynamic
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-x1-sdrive18i-dynamic-indonesia-5524.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-x1-sdrive18i-dynamic-indonesia-5524.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW X3 M Competition
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-x3-m-competition-indonesia-7328.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-x3-m-competition-indonesia-7328.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW X3 sDrive20i xLine
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-x3-sdrive20i-xline-indonesia-6793.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-x3-sdrive20i-xline-indonesia-6793.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW X4 xDrive30i
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-x4-xdrive30i-indonesia-7330.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-x4-xdrive30i-indonesia-7330.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW X5 xDrive40i xLine
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-x5-xdrive40i-xline-indonesia-7274.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-x5-xdrive40i-xline-indonesia-7274.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW X6 xDrive40i
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-x6-xdrive40i-indonesia-6607.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-x6-xdrive40i-indonesia-6607.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                    <div class="space-y-2">
                        <p>
                            <span class="font-bmwRegular">
                                BMW X7 xDrive40i Pure Excellence
                            </span>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/model-bmw-x7-xdrive40i-pure-excellence-indonesia-7285.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Detail
                            </a>
                        </p>
                        <p>
                            <a href="https://www.bmw-performancemotors.co.id/specification-bmw-x7-xdrive40i-pure-excellence-indonesia-7285.htm" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                                <i class='bx bx-chevron-right text-xl'></i>
                                Specification
                            </a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">Special Offer</h5>
                <p>
                    <a href="https://www.bmw-performancemotors.co.id/special-offers" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Sales
                    </a>
                </p>
                <p>
                    <a href="https://www.bmw-performancemotors.co.id/after-sales" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        After Sales
                    </a>
                </p>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">News</h5>
                <p>
                    <a href="https://www.bmw-performancemotors.co.id/news" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        BMW News &amp; Events
                    </a>
                </p>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">Quick Actions</h5>
                <p>
                    <a href="https://service.bmw.co.id/?dealer=BMWIAMLC2B" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in" target="_blank">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Request Service Appointment
                    </a>
                </p>
                <p>
                    <a href="{{ route('testdrive') }}" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Request a Test Drive
                    </a>
                </p>
                <p>
                    <a href="javascript::void(0);" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in" data-modal-target="modal-brochure" data-modal-toggle="modal-brochure">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Request e-Brochure
                    </a>
                </p>
                <p>
                    <a href="{{ route('price') }}" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Pricelist
                    </a>
                </p>
                <p>
                    <a href="{{ route('contact') }}" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Contact Us
                    </a>
                </p>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">Visit Us On</h5>
                <p>
                    <a href="https://www.facebook.com/BMWPerformanceMotorsIndonesia/" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in" target="_blank">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Facebook
                    </a>
                </p>
                <p>
                    <a href="https://www.instagram.com/bmwperformancemotorsid/" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in" target="_blank">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Instagram
                    </a>
                </p>
                <p>
                    <a href="https://www.linkedin.com/company/bmwperformancemotorsid/" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in" target="_blank">
                        <i class='bx bx-chevron-right text-xl'></i>
                        LinkedIn
                    </a>
                </p>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">Experience</h5>
                <p>
                    <a href="https://bmw.com" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in" target="_blank">
                        <i class='bx bx-chevron-right text-xl'></i>
                        BMW.com
                    </a>
                </p>
                <p>
                    <a href="https://bmwgroup.com" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in" target="_blank">
                        <i class='bx bx-chevron-right text-xl'></i>
                        BMW Group
                    </a>
                </p>
            </li>
            <li class="list-group-item">
                <h5 class="font-bmwRegular text-lg mb-2">Legal</h5>
                <p>
                    <a href="{{ route('legal') }}" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Legal Disclaimer
                    </a>
                </p>
                <p>
                    <a href="{{ route('privacy') }}" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Privacy Policy
                    </a>
                </p>
                <p>
                    <a href="{{ route('sitemap') }}" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Site Map
                    </a>
                </p>
                <p>
                    <a href="{{ route('contact') }}" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Contact Us
                    </a>
                </p>
                <p>
                    <a href="{{ route('careers') }}" class="font-bmwRegular flex items-center gap-2 hover:text-sky-600 transition-all duration-150 ease-in">
                        <i class='bx bx-chevron-right text-xl'></i>
                        Careers
                    </a>
                </p>
            </li>
        </ul>
    </div>
</div>

@endsection

@section('scripts')

@endsection