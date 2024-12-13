<div class="swiper myBanners">
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($pages as $page)
        <div class="swiper-slide">
            <div class="relative">
                <img src="{{ $page['image'] }}" alt="" class="w-full object-cover object-top bg-black/90 filter brightness-[90%] hidden md:block">
                <img src="{{ $page['image_mob'] }}" alt="" class="w-full object-cover object-top bg-black/90 filter brightness-[90%] block md:hidden">

                <div class="absolute top-0 left-0 w-full h-full z-20 flex justify-center md:py-40">
                    <div class="container md:w-[90%] mx-auto px-4">
                        <div class="text-5xl font-bmwLight text-gray-100 mb-2">{{ $page['title'] }}</div>
                        <div class="text-2xl font-bmwLight text-gray-100">{{ $page['subtitle'] }}</div>
                        <div class="mt-10">
                            <a href="{{ $page['button_link'] }}" class="buttons blue text-base rounded-none">{{ $page['button_name'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if (count($pages) > 1)
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    
    <div class="swiper-pagination"></div>
    @endif
</div>