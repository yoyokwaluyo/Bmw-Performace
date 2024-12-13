@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="relative">
    <img src="{{ asset('image/image_header_spesial_offer.jpg') }}" alt="image" class="w-full h-[550px] object-cover hidden md:block">
    <img src="{{ asset('image/Bitmap1.jpg') }}" alt="image" class="w-full block md:hidden">
</div>

<div class="container md:w-[90%] mx-auto px-4 my-10">
    <div class="mb-10">
        <div class="offering-contents">
            <p>Datang dan kunjungi pameran&nbsp;BMW Performance Motors&nbsp;pada tgl 3-9 Jul 2023 di Sun Plaza Medan.<br><br>Dapatkan Gratis Voucher Bensin jutaan rupiah dan program menarik selama pameran berlangsung.<br>Setiap pembelian mobil di BMW&nbsp;Performance Motors sudah termasuk⁣⁣</p>
            <ul>
                <li>5 Tahun Servis Berkala⁣⁣,</li>
                <li>5 Tahun Garansi</li>
                <li>2 Tahun Perlindungan Ban</li>
                <li>24/7 Road Assistance</li>
            </ul>
            <p>Untuk informasi lebih lanjut silakan hubungi<br>BMW Contact Center <br>(061) 4511 299 / 399 <br>Atau Whatsapp di 0811-6054-805</p>
            <p><br>*S&amp;K Berlaku</p>
        </div>
    </div>
    <div>
        <form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="salutation" class="form-label">SALUTATION *</label>
                <select class="form-control salutationBrochure" id="salutation" name="salutation">
                    <option value="1" selected="">Mr.</option>
                    <option value="2">Ms.</option>
                    <option value="3">Mrs.</option>
                </select>
                <input type="hidden" id="detailSalutationBrochure" name="salutationname" value="Mr.">
            </div>
            <div>
                <label for="first-name" class="form-label">FIRST NAME *</label>
                <input type="text" class="form-control" id="first-name" name="firstname" autocomplete="off">
            </div>
            <div>
                <label for="last-name" class="form-label">LAST NAME *</label>
                <input type="text" class="form-control" id="last-name" name="lastname" autocomplete="off">
            </div>
            <div>
                <label for="phone" class="form-label">MOBILE PHONE NUMBER *</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <span class="font-medium">+62</span>
                    </div>
                    <input onkeypress="return /[0-9]/i.test(event.key)" type="text" id="phone" name="phone" class="form-control group" placeholder="123-45-678">
                </div>
                <label class="alert-phone hidden text-red-500">No Telp ini sudah melakukan permintaan model yang sama, dalam 3 hari ini.</label>
            </div>
            <div>
                <label for="email" class="form-label">EMAIL *</label>
                <input type="email" class="form-control" id="email" name="email" autocomplete="off">
            </div>
            <div>
                <label for="current-model" class="form-label">CURRENT CAR MODEL *</label>
                <input type="text" class="form-control" id="current-model" name="current_car_model" required>
            </div>
            <div>
                <label for="car-year" class="form-label">YEAR *</label>
                <input type="text" class="form-control" id="car-year" name="car_year" required>
            </div>
            <div>
                <label for="vehicle-interest" class="form-label">VEHICLE OF INTEREST *</label>
                <select name="vehicle_of_interest" class="form-control" id="vehicle-interest" required="">
                    <option value="">Please select</option>
                    <option value="218i Gran Coupé Sport">218i Gran Coupé Sport</option>
                    <option value="220i Coupé M Sport">220i Coupé M Sport</option>
                    <option value="320i Sport">320i Sport</option>
                    <option value="320i M Sport">320i M Sport</option>
                    <option value="330i M Sport Pro">330i M Sport Pro</option>
                    <option value="430i Coupé M Sport Pro">430i Coupé M Sport Pro</option>
                    <option value="430i Convertible M Sport">430i Convertible M Sport</option>
                    <option value="520i M Sport">520i M Sport</option>
                    <option value="530i Opulence">530i Opulence</option>
                    <option value="735i M Sport">735i M Sport</option>
                    <option value="840i Gran Coupé M Sport Pro">840i Gran Coupé M Sport Pro</option>
                    <option value="840i Coupé M Sport Pro">840i Coupé M Sport Pro</option>
                    <option value="X3 sDrive20i xLine">X3 sDrive20i xLine</option>
                    <option value="X3 xDrive30i M Sport">X3 xDrive30i M Sport</option>
                    <option value="X4 xDrive30i M Sport">X4 xDrive30i M Sport</option>
                    <option value="X5 xDrive40i xLine">X5 xDrive40i xLine</option>
                    <option value="X6 xDrive40i M Sport">X6 xDrive40i M Sport</option>
                    <option value="X7 xDrive40i M Sport">X7 xDrive40i M Sport</option>
                    <option value="M3 Competition">M3 Competition</option>
                    <option value="M4 Coupé Competition">M4 Coupé Competition</option>
                    <option value="X3 M Competition">X3 M Competition</option>
                    <option value="X4 M Competition">X4 M Competition</option>
                    <option value="i4 eDrive40 M Sport">i4 eDrive40 M Sport</option>
                    <option value="i7 xDrive60 Gran Lusso">i7 xDrive60 Gran Lusso</option>
                    <option value="iX xDrive40 Sport">iX xDrive40 Sport</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="location-test-drive" class="form-label">LOCATION *</label>
                <div class="col-sm-9">
                    <select class="form-control" id="location-test-drive-2" name="location" required="">
                        <option value="" selected disabled>Select Location</option>
                        <option value="1">BMW Performance Motors Thamrin</option>
                        <option value="2">BMW Performance Motors Medan</option>
                    </select>
                    <div class="text-sm">
                        <small id="address-test-drive-2">SHOWROOM : Plaza Galeon Jl. M.H. Thamrin No. 8 Jakarta 10230
                            <br>
                            AFTERSALES : UOB Plaza B1 Floor Jl. M.H. Thamrin No. 10 Jakarta 10230</small>
                        <p><small id="phone-test-drive-2">Phone: 021 29937269</small></p>
                    </div>
                </div>
                <input type="hidden" id="detailLocationShowroom" name="locationShowroom">
                <input type="hidden" id="detailLocationPhone" name="locationPhone">
            </div>

            <div class="col-span-2">
                <label for="location" class="form-label">RECAPTCHA *</label>
                <div>
                    @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                    @endif
                    {!! NoCaptcha::display(['data-callback' => 'enableSubmitRequestOffer']) !!}
                </div>
            </div>
            <div class="col-span-2">
                <label for="notice" class="form-label">Legal Notice</label>
                <p class="text-sm mb-2" id="notice">
                    BMW Performance Motors will use your personal data for the purpose of processing, administration, marketing, credit checking, host mailing, statistical analysis, customer services and improving our services. We may disclose your information to our service providers and agents for these purposes. For more information please visit the
                    <a href="{{ route('privacy') }}" class="text-dark text-bmw-bold text-break">
                        <u>Privacy Policy page.</u>
                    </a>
                </p>
                <div class="flex items-center mb-4">
                    <input id="remember" name="remember" type="checkbox" value="" class="form-checkbox">
                    <label for="remember" class="ms-2 text-sm form-label mb-0">I consent to my personal data being used as set out in the <span class="font-bmwBold">Privacy Policy.</span></label>
                </div>
            </div>
            <div class="col-span-2">
                <button class="buttons blue rounded-none mx-auto text-base min-w-60" type="submit" id="requestoffersubmit" disabled="disabled">
                    SUBMIT
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')

@endsection