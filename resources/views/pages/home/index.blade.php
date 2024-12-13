@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<x-banner-slider></x-banner-slider>

<div class="grid md:grid-cols-2 gap-2 mt-2">
    <div class="relative">
        <div class="absolute top-0 left-0 w-full h-full bg-black/30 px-6 py-10">
            <div class="text-4xl font-bmwLight text-gray-100">BMW CORPORATE PROGRAM</div>
            <a href="{{ route('specialoffer.form', ['slug' => \Str::slug('BMW CORPORATE PROGRAM'), 'id' => '231']) }}" class="buttons-outline rounded-none mt-8 text-sm">Find Out More.</a>
        </div>
        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/berita/juhgn24wHHW6r6MptngVahKZs7nhYHAPVaUIkdhX.jpeg" alt="image" class="lazy w-full object-cover">
    </div>
    <div class="relative">
        <div class="absolute top-0 left-0 w-full h-full bg-black/30 px-6 py-10">
            <div class="text-4xl font-bmwLight text-gray-100">We Accept Various Insurance Coverage.</div>
            <a href="#" class="buttons-outline rounded-none mt-8 text-sm">Find Out More.</a>
        </div>
        <img data-src="https://rajamobil.s3.ap-southeast-1.amazonaws.com/my/berita/N5JiBt8Jual5lRv5AP33nszMNOc44YtiGi49VDgh.jpeg" alt="image" class="lazy w-full object-cover">
    </div>
</div>

<div class="container md:w-[90%] mx-auto mt-16 px-4">
    <div class="text-4xl mb-4">Featured Models.</div>
    <x-featured-models></x-featured-models>
</div>

<br><br><br><br>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection