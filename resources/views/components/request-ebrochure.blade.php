<!-- E-Brochure modal -->
<div id="{{ $nameModal }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[1111] justify-center items-center w-full md:inset-0 h-screen max-h-full bg-black/70">
    <div class="relative p-4 w-full max-w-6xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Enter Your Details
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="{{ $nameModal }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @csrf
                    @if (isset($data))
                    <div class="col-span-2 grid md:grid-cols-2 gap-4">
                        <div>
                            <img src="https://static.rajamobil.com/media/images/databasemobil/mobilbaru/color/1695116907-M_W.png" class="max-w-full object-contain">
                        </div>
                        <div class="flex items-center">
                            <div class="text-3xl font-bmwBold">i4 Series Sedan</div>
                        </div>
                    </div>
                    @else
                    <div>
                        <label for="model" class="form-label">MODEL *</label>
                        <select class="form-control" id="model" name="foreign_model_id">
                            <option value="">Select Model</option>
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
                    @endif
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
                        <label for="phone" class="form-label">PHONE *</label>
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
                    <div class="col-span-2">
                        <label for="location" class="form-label">RECAPTCHA *</label>
                        @if ($errors->has('g-recaptcha-response'))
                        <span class="help-block">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                        @endif
                        {!! NoCaptcha::display(['data-callback' => 'enableSubmitBrochure']) !!}
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
                            SUBMIT
                        </button>
                    </div>
                    <div>&nbsp;</div>
                </form>
            </div>
        </div>
    </div>
</div>