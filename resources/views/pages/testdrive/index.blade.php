@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="container md:w-[90%] mx-auto px-4">
    <div class="my-40">
        <div class="text-xl font-bmwBold mb-2">REQUEST A TEST DRIVE</div>
        <div class="text-lg">Test drive the BMW of your choice.</div>
        <div class="text-lg">Please complete all of the boxes marked with an (*) to submit your enquiry, <br>your preferred BMW dealer will then contact you to arrange a test drive.</div>

        <form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-10">

            <div class="">
                <label for="series" class="form-label">SERIES *</label>
                <select class="form-control" id="allmodels" name="foreign_model_id" required="">
                    <option value="">Select Series</option>
                    <option value="2">2 Series</option>
                    <option value="3">3 Series</option>
                    <option value="4">4 Series</option>
                    <option value="5">5 Series</option>
                    <option value="7">7 Series</option>
                    <option value="8">8 Series</option>
                    <option value="M">M Series</option>
                    <option value="X">X Series</option>
                    <option value="Z">Z Series</option>
                    <option value="i">i Series</option>
                </select>
                <input type="hidden" id="detailModel" name="modelname">
            </div>
            <div class="">
                <label for="models" class="form-label">INTEREST MODEL *</label>
                <select class="form-control" id="res-series" name="foreign_type_id" required="">
                    <option value="">Select Model</option>
                </select>
                <input type="hidden" id="detailTipe" name="modeltipe">
            </div>
            <div class="">
                <label for="email" class="form-label">EMAIL *</label>
                <input type="email" name="email" class="form-control" id="email" required="" autocomplete="off">
            </div>
            <div class="">
                <label for="salutation" class="form-label">SALUTATION *</label>
                <select class="form-control" id="salutation" name="salutation" required="">
                    <option value="1" selected="">Mr.</option>
                    <option value="2">Ms.</option>
                    <option value="3">Mrs.</option>
                </select>
                <input type="hidden" id="detailSalutation" name="salutationname" value="Mr.">
            </div>
            <div class="">
                <label for="first-name" class="form-label">FIRST NAME *</label>
                <input type="text" name="firstname" class="form-control" id="first-name" required="" autocomplete="off">
            </div>
            <div class="">
                <label for="last-name" class="form-label">LAST NAME *</label>
                <input type="text" name="lastname" class="form-control" id="last-name" required="" autocomplete="off">
            </div>
            <div>
                <label for="phone" class="form-label">PHONE *</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <span class="font-medium">+62</span>
                    </div>
                    <input onkeypress="return /[0-9]/i.test(event.key)" type="text" id="lead_phone" name="lead_phone" class="form-control group" placeholder="123-45-678">
                </div>
                <label class="alert-phone hidden text-red-500">No Telp ini sudah melakukan permintaan model yang sama, dalam 3 hari ini.</label>
            </div>
            <div>
                <label for="date" class="form-label">PREFERRED DATE *</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <i class='bx bx-calendar text-xl'></i>
                    </div>
                    <input type="text" id="date" name="date" class="form-control group">
                </div>
            </div>
            <div class="">
                <label for="location" class="form-label">LOCATION *</label>
                <select class="form-control" id="location-test-drive" name="location" required="">
                    <option value="">Select Location</option>
                    <option value="1">BMW Performance Motors Thamrin</option>
                    <option value="2">BMW Performance Motors Medan</option>
                    <option value="3">BMW Studio Sentul</option>
                </select>
                <input type="hidden" id="detailLocationShowroom" name="locationShowroom">
                <input type="hidden" id="detailLocationPhone" name="locationPhone">
                <input type="hidden" id="detailLocationName" name="locationName">

                <div class="text-muted">
                    <small id="address-test-drive"></small>
                    <p><small id="phone-test-drive"></small></p>
                </div>
            </div>
            <div class="col-span-2">
                <label for="location" class="form-label">RECAPTCHA *</label>
                @if ($errors->has('g-recaptcha-response'))
                <span class="help-block">
                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                </span>
                @endif
                {!! NoCaptcha::display(['data-callback' => 'enableSubmitTestdrive']) !!}
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
                <button class="buttons blue rounded-none mx-auto text-base min-w-60" type="submit" id="brochuresubmit" disabled="disabled">
                    SEND REQUEST
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        flatpickr("#date", {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today",
        });
    });
</script>
@endsection