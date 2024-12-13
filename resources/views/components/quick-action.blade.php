<div class="mt-10 space-y-8" id="quick-action">
    <div class="text-2xl font-bmwBold">Quick Actions</div>
    <div class="grid md:grid-cols-5 gap-4">
        <a href="https://service.bmw.co.id/?dealer=BMWIAMLC2B" class="bg-gray-100 p-4 rounded-sm hover:bg-gray-200 transition-all duration-150 max-sm:flex max-sm:items-center max-sm:gap-4">
            <div class="flex items-center md:items-end justify-center h-[70px] md:h-[80px] max-sm:w-32">
                <img data-src="{{ asset('image/icon/icon_service.svg') }}" alt="icon" class="lazy">
            </div>
            <div class="font-bmwBold text-center h-[70px] md:h-[80px] flex items-center justify-center text-gray-600">Request Service Appointment</div>
        </a>
        <a href="{{ route('testdrive') }}" class="bg-gray-100 p-4 rounded-sm hover:bg-gray-200 transition-all duration-150 max-sm:flex max-sm:items-center max-sm:gap-4">
            <div class="flex items-center md:items-end justify-center h-[70px] md:h-[80px] max-sm:w-32">
                <img data-src="{{ asset('image/icon/icon_test_drive_(dark_grey).svg') }}" alt="icon" class="lazy">
            </div>
            <div class="font-bmwBold text-center h-[70px] md:h-[80px] flex items-center justify-center text-gray-600">Request a Test Drive</div>
        </a>
        <div class="cursor-pointer bg-gray-100 p-4 rounded-sm hover:bg-gray-200 transition-all duration-150 max-sm:flex max-sm:items-center max-sm:gap-4" data-modal-target="{{ $nameModal }}" data-modal-toggle="{{ $nameModal }}">
            <div class="flex items-center md:items-end justify-center h-[70px] md:h-[80px] max-sm:w-32">
                <img data-src="{{ asset('image/icon/icon_brosur.svg') }}" alt="icon" class="lazy">
            </div>
            <div class="font-bmwBold text-center h-[70px] md:h-[80px] flex items-center justify-center text-gray-600">Request e-Brochure</div>
        </div>
        <a href="{{ route('price') }}" class="bg-gray-100 p-4 rounded-sm hover:bg-gray-200 transition-all duration-150 max-sm:flex max-sm:items-center max-sm:gap-4">
            <div class="flex items-center md:items-end justify-center h-[70px] md:h-[80px] max-sm:w-32">
                <img data-src="{{ asset('image/icon/icon_pricelist.svg') }}" alt="icon" class="lazy">
            </div>
            <div class="font-bmwBold text-center h-[70px] md:h-[80px] flex items-center justify-center text-gray-600">Pricelist</div>
        </a>
        <a href="{{ route('contact') }}" class="bg-gray-100 p-4 rounded-sm hover:bg-gray-200 transition-all duration-150 max-sm:flex max-sm:items-center max-sm:gap-4">
            <div class="flex items-center md:items-end justify-center h-[70px] md:h-[80px] max-sm:w-32">
                <img data-src="{{ asset('image/icon/icon_contact_us.svg') }}" alt="icon" class="lazy">
            </div>
            <div class="font-bmwBold text-center h-[70px] md:h-[80px] flex items-center justify-center text-gray-600">Contact Us</div>
        </a>
    </div>
</div>

<!-- E-Brochure modal -->
@include("components.request-ebrochure", ["nameModal" => $nameModal])