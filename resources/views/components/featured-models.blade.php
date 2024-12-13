<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    @forelse ($cars as $car)
    <div class="p-4">
        <img data-src="{{ $car['image'] }}" alt="image" class="lazy max-w-72 mx-auto">
        <div class="space-y-4 mt-4">
            <div class="ms-4 text-xl">{{ $car['name'] }}</div>
            <div class="ms-4">
                <div class="font-bmwBold">{{ $car['fuel'] }}</div>
                <div>{{ $car['price'] }}</div>
            </div>
            <div class="ms-2">
                <a href="{{ $car['link'] }}" class="font-bmwBold flex items-center gap-1 group">
                    <i class='bx bx-chevron-right text-3xl group-hover:text-sky-600 group-hover:translate-x-1 transition-all duration-150'></i>
                    <span class="group-hover:text-sky-600 transition-all duration-150">Show More</span>
                </a>
            </div>
        </div>
    </div>
    @empty
    <p>No cars</p>
    @endforelse
</div>

<div class="mt-10">
    <a href="{{ route('models') }}" class="buttons blue text-base rounded-none mx-auto">Dicover All Models</a>
</div>