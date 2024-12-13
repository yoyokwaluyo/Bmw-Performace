@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div>
    <img src="https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner/2751-337b7cd1ba359398e2b4784e981edd76.jpg" alt="image" class="w-full h-[550px] object-cover hidden md:block">
    <img src="https://ramo-statics.s3-ap-southeast-1.amazonaws.com/images/banner_slider/BMW/banner_mobile/Career_Mobile.jpg" alt="image" class="w-full block md:hidden">
</div>

<div class="container md:w-[90%] mx-auto px-4">
    <div class="my-10">
        <div class="stepper-form">
            <div class="tabs">
                <ol>
                    <li class="active" data-tabs="1">
                        <div>
                            <i class='bx bxs-car'></i>
                        </div>
                    </li>
                    <li data-tabs="2">
                        <div>
                            <i class='bx bx-calendar-check'></i>
                        </div>
                    </li>
                    <li data-tabs="3">
                        <div>
                            <i class='bx bxs-user'></i>
                        </div>
                    </li>
                </ol>
            </div>
            <form action="#" id="booking-serivce">
                @csrf
                <div class="my-10 md:w-11/12 mx-auto steps" id="step-1">
                    <h3 class="text-2xl font-medium text-gray-900 mb-6">Informasi Kendaraan</h3>
                    <div class="grid gap-6 sm:grid-cols-2 mb-10">
                        <div>
                            <label for="foreign_model_id" class="form-label">SERIES <span class="text-red-500">*</span></label>
                            <select name="foreign_model_id" class="form-control" id="foreign_model_id" required data-gtm-form-interact-field-id="0">
                                <option value="" selected="" disabled>Select Series</option>
                                <option value="26">3 Series</option>
                                <option value="826">4 Series</option>
                                <option value="27">5 Series</option>
                                <option value="29">7 Series</option>
                                <option value="1189">8 Series</option>
                                <option value="30">X1</option>
                                <option value="1190">X2</option>
                                <option value="1097">X3</option>
                                <option value="1098">X4</option>
                                <option value="1099">X5</option>
                                <option value="1100">X6</option>
                                <option value="1183">X7</option>
                                <option value="31">Z</option>
                                <option value="373">M</option>
                                <option value="1191">I3</option>
                            </select>
                        </div>
                        <div>
                            <label for="seriesyear" class="form-label">YEAR <span class="text-red-500">*</span></label>
                            <select name="seriesyear" id="seriesyear" class="form-control" required data-gtm-form-interact-field-id="1">
                                <option value="" disabled="" selected="">Pilih Tahun</option>
                                @for ($x = date('Y'); $x >= 1990; $x--)
                                <option value="{{$x}}">{{$x}}</option>
                                @endfor
                            </select>
                        </div>
                        <div>
                            <label for="plat" class="form-label">LICENSE NUMBER <span class="text-red-500">*</span></label>
                            <input type="text" name="plat" id="plat" class="form-control" placeholder="B 1234 XXX" required="" maxlength="11" data-gtm-form-interact-field-id="2">
                        </div>
                    </div>
                </div>
                <div class="my-10 md:w-11/12 mx-auto steps" id="step-2">
                    <h3 class="text-2xl font-medium text-gray-900 mb-6">Jadwal Waktu Service</h3>
                    <div class="grid gap-6 sm:grid-cols-1 mb-10">
                        <div class="grid gap-4 sm:grid-cols-3">
                            <div class="md:col-span-2">
                                <label for="tanggal_service" class="form-label">PREFERRED DATE <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class='bx bx-calendar-check text-xl'></i>
                                    </div>
                                    <input type="text" name="tanggal_service" id="tanggal_service" class="form-control group" required>
                                </div>
                            </div>
                            <div>
                                <label for="waktu_service" class="form-label">TIME <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <i class='bx bx-time text-xl'></i>
                                    </div>
                                    <select name="jam_booking" id="jam_booking" class="form-control group" required>
                                        <option selected="" disabled="" value="">Pilih Waktu*</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="17:00">17:00</option>
                                        <option value="18:00">18:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="service_type" class="form-label">SERVICE TYPE <span class="text-red-500">*</span></label>
                            <select class="form-control" id="type" name="service_type">
                                <option value="" selected disabled>Select Service</option>
                                <option value="1">Repair</option>
                                <option value="2">Maintenance</option>
                                <option value="3">Oil Change</option>
                                <option value="4">Wheel Alignment</option>
                                <option value="5">Others</option>
                            </select>
                        </div>
                        <div>
                            <div>
                                <label for="service_type" class="form-label">SERVICE CENTER <span class="text-red-500">*</span></label>
                                <select class="form-control" id="center" name="location" data-gtm-form-interact-field-id="3">
                                    <option value="" selected disabled>Select Location</option>
                                    <option value="1">BMW Performance Motors Thamrin</option>
                                    <option value="2">BMW Performance Motors Medan</option>
                                </select>
                            </div>
                            <div class="text-gray-500 full-loc">
                                <small>
                                    SHOWROOM : Plaza Galeon Jl. M.H. Thamrin No. 8 Jakarta 10230 <br>
                                    AFTERSALES : UOB Plaza B1 Floor Jl. M.H. Thamrin No. 10 Jakarta 10230
                                </small>
                                <p><small>Phone: 021 29937269</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-10 md:w-11/12 mx-auto steps" id="step-3">
                    <h3 class="text-2xl font-medium text-gray-900 mb-6">Informasi Pemilik</h3>
                    <div class="grid gap-6 sm:grid-cols-2 mb-10">
                        <div>
                            <label for="salutation" class="form-label">SALUTATION <span class="text-red-500">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-control salutationService" id="salutation" name="salutation" required="">
                                    <option value="1">Mr.</option>
                                    <option value="2">Ms.</option>
                                    <option value="3">Mrs.</option>
                                </select>
                                <input type="hidden" id="detailSalutationService" name="salutationname" value="Mr.">
                            </div>
                        </div>
                        <div>
                            <label for="firstname" class="form-label">FIRST NAME <span class="text-red-500">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="firstname" id="firstname" class="form-control" required="">
                            </div>
                        </div>
                        <div>
                            <label for="lastname" class="form-label">LAST NAME <span class="text-red-500">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" name="lastname" id="lastname" class="form-control" required="">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="form-label">EMAIL <span class="text-red-500">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" required="">
                        </div>
                        <div>
                            <label for="phone" class="form-label">PHONE <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <span class="font-medium">+62</span>
                                </div>
                                <input type="text" name="phone" id="phone" class="form-control group" placeholder="123-45-678" required>
                            </div>
                        </div>
                        <div>
                            <label for="preffered_contact_mode" class="form-label">PREFERED MODE OF CONTACT <span class="text-red-500">*</span></label>
                            <select name="preffered_contact_mode" class="form-control" id="preffered_contact_mode" required="">
                                <option value="" selected="" disabled="">Pilih</option>
                                <option value="Phone">Phone</option>
                                <option value="Email">Email</option>
                                <option value="Whatsapp">Whatsapp</option>
                            </select>
                        </div>
                        <div>
                            <label for="address" class="form-label">ADDRESS <span class="text-red-500">*</span></label>
                            <textarea name="address" class="form-control" id="address" rows="4" required=""></textarea>
                        </div>
                        <div class="col-span-2">
                            <label for="location" class="form-label">RECAPTCHA <span class="text-red-500">*</span></label>
                            <div class="col-sm-10">
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                @endif
                                {!! NoCaptcha::display(['data-callback' => 'enableSubmitService']) !!}
                            </div>
                        </div>

                    </div>
                </div>
                <button class="buttons min-w-52 mx-auto" id="button-step" disabled current-steps="1">NEXT</button>
                <button class="buttons min-w-52 blue mx-auto hidden" type="button" id="servicesubmit" >SUBMIT</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        booking.init();

        flatpickr("#tanggal_service", {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "{{ date('Y-m-d', strtotime('+1 DAYS')) }}",
            maxDate: "{{ date('Y-m-d', strtotime('+3 YEAR')) }}",
            onChange: function(selectedDates, dateStr, instance) {

            },
        });
    });

    let booking = {
        init: function() {
            // hide content step page
            booking.showPage("step-1");

            booking.formValidation(1);
        },
        showPage: function(page) {
            let steps = document.querySelectorAll(".steps");
            steps.forEach(element => {
                element.classList.remove("hidden");
                if (element.id !== page) {
                    element.classList.add("hidden");
                }
            });
        },
        activeTabs: function(page) {
            let tabs = document.querySelectorAll(".tabs ol li");

            tabs.forEach(element => {
                let tab = element.getAttribute("data-tabs");
                if (page == tab) {
                    element.classList.add("active");
                }
            });
        },
        activeButton: function(active, page) {
            let btn = document.querySelector("#button-step");

            if (active) {
                btn.classList.add("blue");
            } else {
                btn.classList.remove("blue");
            }
            btn.disabled = !active;
            btn.setAttribute("current-steps", page);
        },
        formValidation: function(page) {
            let formInput = document.querySelectorAll("#step-" + page + " .form-control");
            let btn = document.querySelector("#button-step");
            let btnForm = document.querySelector("#servicesubmit");
            let arr = {};

            formInput.forEach((element, key) => {
                element.addEventListener("change", (e) => {
                    var val = e.target.value;

                    // set array true/false from value input
                    formInput.forEach((el, val) => {
                        (el.value.trim().length !== 0) ? arr[val] = true: arr[val] = false;
                    });
                    console.log(arr);

                    // Check that all fields are filled in every page step
                    let count = 0;
                    formInput.forEach((elem, idx) => {
                        if (arr[idx]) count++;
                    });
                    console.log(count);

                    if (count >= formInput.length) { // succes or continue step
                        booking.activeButton(true, page);
                        booking.buttonSubmit(page);
                        if (page == 3) { // page ke 3
                            btn.classList.add("hidden");
                            btnForm.classList.remove("hidden"); // show button modal pin
                        }
                    } else {
                        booking.activeButton(false, page);
                        if (page == 3) { // page ke 3
                            btn.classList.remove("hidden");
                            btnForm.classList.add("hidden"); // hide button modal pin
                        }
                    }
                });
            });
        },
        buttonSubmit: function(page) {
            let btn = document.querySelector("#button-step");

            if (page == 1) {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    let pageSteps = e.target.getAttribute("current-steps");

                    if (pageSteps == 1) {
                        booking.showPage("step-2");
                        booking.activeTabs(2);

                        booking.activeButton(false, 2);
                        booking.formValidation(2);
                    }
                });
            }

            if (page == 2) {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    let pageSteps = e.target.getAttribute("current-steps");

                    if (pageSteps == 2) {
                        booking.showPage("step-3");
                        booking.activeTabs(3);

                        booking.activeButton(false, 3);
                        booking.formValidation(3);
                    }
                });
            }
        }
    }
</script>
@endsection