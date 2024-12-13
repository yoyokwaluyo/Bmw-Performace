<div class="fixed top-0 left-0 z-[1021] w-full">
    <nav class="max-w-[1800px] mx-auto {{ $whiteHeader ? 'active' : 'bg-transparent' }}" id="{{ $whiteHeader ? '' : 'default-header' }}">
        <div class="container md:w-[90%] mx-auto flex items-center justify-center gap-8 max-sm:px-4 max-sm:py-2">
            <div class="w-full">
                <div class="flex flex-wrap items-center justify-between h-full md:h-24 md:border-b border-gray-200">
                    <div class="hidden w-full md:block md:w-auto max-sm:mt-6 space-x-3 rtl:space-x-reverse">
                        <ul class="nav-header">
                            <li>
                                <a href="{{ route('models') }}" class="nav-links {{ request()->routeIs('home') ? 'active' : '' }}">Models</a>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0);" class="nav-links" id="dropdownDefaultService" data-dropdown-toggle="dropdown-service">Services</a>
                                <div id="dropdown-service" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52">
                                    <ul class="py-2 font-bmwRegular text-sm text-gray-700" aria-labelledby="dropdownDefaultService">
                                        <li>
                                            <a href="{{ route('service') }}" class="block px-4 py-2 hover:bg-gray-100">BMW Performance Motors Medan</a>
                                        </li>
                                        <li>
                                            <a href="https://service.bmw.co.id/?dealer=BMWIAMLC2B" class="block px-4 py-2 hover:bg-gray-100" target="_blank">BMW Performance Motors Thamrin</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0);" class="nav-links" id="dropdownDefaultOffer" data-dropdown-toggle="dropdown-offer">Special Offers</a>
                                <div id="dropdown-offer" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 font-bmwRegular text-sm text-gray-700" aria-labelledby="dropdownDefaultOffer">
                                        <li>
                                            <a href="{{ route('specialoffer') }}" class="block px-4 py-2 hover:bg-gray-100">Sales</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('aftersales') }}" class="block px-4 py-2 hover:bg-gray-100">After Sales</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('news') }}" class="nav-links">News</a>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-100 rounded-lg md:hidden" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <div class="hidden md:block md:w-auto max-sm:mt-6" id="navbar-default">
                        <ul class="font-medium flex gap-8 flex-row max-sm:flex-col max-sm:divide-y">
                            <li>
                                <button id="btn-search" data-modal-target="modal-search" data-modal-toggle="modal-search">
                                    <img src="{{ $whiteHeader ? asset('image/icon/icon_search_soft_grey.svg') : asset('image/icon/icon_search.svg') }}" alt="image" class="" id="nav-search">
                                </button>
                            </li>
                            <li>
                                <a href="{{ route('testdrive') }}" class="nav-links">
                                    <img src="{{ $whiteHeader ? asset('image/icon/icon_test_drive_soft_grey.svg') : asset('image/icon/icon_test_drive_(white).svg') }}" alt="image" class="" id="nav-drive">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden md:block text-end text-gray-100" id="pleasure">Sheer Driving <span class="font-bmwBold">Pleasure</span></div>
            </div>
            <div>
                <a href="/">
                    @if ($whiteHeader)
                    <img src="{{ asset('image/icon/BMW_logo_grey.png') }}" alt="image" class="" id="nav-logo">
                    @else
                    <img src="{{ asset('image/icon/BMW_logo_white.png') }}" alt="image" class="md:mb-3" id="nav-logo">
                    @endif
                </a>
            </div>
        </div>
    </nav>
</div>


<!-- Main modal -->
<div id="modal-search" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[1111] justify-center items-center w-full md:inset-0 h-screen max-h-full bg-black/70">
    <div class="relative p-4 w-full max-w-6xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-2xl font-bmwRegular text-gray-900 dark:text-white">
                    FIND YOUR BMW
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-search">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 md:pb-8">
                <div class="mb-10 max-w-[80%] mx-auto py-14">
                    <input id="model-search" name="model-search" type="text" class="bg-gray-50 text-lg font-bmwRegular border-0 border-b-2 border-gray-400 text-gray-900 focus:ring-transparent focus:border-0 focus:border-b-2 block w-full p-3 focus:pl-4" autofocus="">
                    <div id="result-model"></div>
                </div>
                
                <x-quick-action nameModal="modal-brochure-header"></x-quick-action>
            </div>
        </div>
    </div>
</div>

<script>
    let search = {
        init: function () {
            let menuSearch = document.querySelector("#btn-search");

            menuSearch.addEventListener("click", function() {
                $(".lazy").Lazy();
            });
        }
    }
    search.init();
</script>