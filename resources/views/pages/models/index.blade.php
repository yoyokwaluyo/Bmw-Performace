@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="container md:w-[90%] mx-auto px-4">
    <div class="text-justify mt-28 md:mt-40">
        <div class="text-5xl">FIND YOUR BMW</div>
        <form action="#" class="mt-16 md:mt-10" data-gtm-form-interact-id="0">
            <div class="flex items-center flex-wrap gap-4 md:gap-8">
                <label class="form-label">
                    <input type="checkbox" name="body_name[]" value="1" class="form-checkbox rounded-none w-6 h-6 bg-white" data-gtm-form-interact-field-id="0">
                    <span class="ms-2 align-middle font-bmwBold text-base">Hatchback</span>
                </label>
                <label class="form-label">
                    <input type="checkbox" name="body_name[]" value="4" class="form-checkbox rounded-none w-6 h-6 bg-white" data-gtm-form-interact-field-id="1">
                    <span class="ms-2 align-middle font-bmwBold text-base">Wagon</span>
                </label>
                <label class="form-label">
                    <input type="checkbox" name="body_name[]" value="2" class="form-checkbox rounded-none w-6 h-6 bg-white">
                    <span class="ms-2 align-middle font-bmwBold text-base">Sedan</span>
                </label>
                <label class="form-label">
                    <input type="checkbox" name="body_name[]" value="7" class="form-checkbox rounded-none w-6 h-6 bg-white">
                    <span class="ms-2 align-middle font-bmwBold text-base">Coupé</span>
                </label>
                <label class="form-label">
                    <input type="checkbox" name="body_name[]" value="27" class="form-checkbox rounded-none w-6 h-6 bg-white">
                    <span class="ms-2 align-middle font-bmwBold text-base">Convertible</span>
                </label>
                <label class="form-label">
                    <input type="checkbox" name="body_name[]" value="3" class="form-checkbox rounded-none w-6 h-6 bg-white" data-gtm-form-interact-field-id="2">
                    <span class="ms-2 align-middle font-bmwBold text-base">SAV</span>
                </label>
                <label class="form-label">
                    <input type="checkbox" name="body_name[]" value="28" class="form-checkbox rounded-none w-6 h-6 bg-white">
                    <span class="ms-2 align-middle font-bmwBold text-base">SAC</span>
                </label>
            </div>
            <div class="mt-8">
                <button class="buttons min-w-60 py-4 rounded-none bg-white text-black/80 border border-gray-300 drop-shadow-md hover:bg-white hover:drop-shadow-lg">FILTER</button>
            </div>
        </form>
    </div>
</div>

<div class="container md:w-[90%] mx-auto px-4 my-20 space-y-8">
    @foreach(['I','2','3','4','5','7','8','X'] as $series)
    <div class="vehicle-list">
        <div class="vehicle-series">{{ $series }}</div>
    
        <div class="vehicle-cars">
            @foreach($data as $car)
            <div class="vehicle-car group">
                <img data-src="{{ $car['image'] }}" class="lazy w-full object-contain mx-auto">
                <div class="space-y-4 mt-8">
                    <div class="font-bmwRegular">{{ $car['name'] }}</div>
                    <div>
                        <a href="{{ route('model_detail', ['slug' => \Str::slug($car['name']), 'type_id' => '2123']) }}" class="buttons blue group-hover:visible group-hover:opacity-100">Show More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection