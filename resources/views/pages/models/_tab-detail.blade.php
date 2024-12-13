<div class="shadow-md">
    <div class="flex items-center justify-between max-sm:flex-col-reverse max-sm:gap-4 container md:w-[90%] mx-auto px-4 max-sm:pt-4">
        <div class="flex items-center gap-1">
            <a href="{{ route('model_detail', ['slug' => Str::slug('BMW X5 xDrive40i xLine'), 'type_id' => '2123']) }}" class="nav-tabs {{ request()->routeIs('model_detail') ? 'active' : '' }}">Detail</a>
            <a href="{{ route('model_spesifikasi', ['slug' => Str::slug('BMW X5 xDrive40i xLine'), 'type_id' => '2123']) }}" class="nav-tabs {{ request()->routeIs('model_spesifikasi') ? 'active' : '' }}">Spesification</a>
        </div>
        <div class="flex items-center gap-4">
            <a href="javasript:void(0);" data-modal-target="modal-brochure-detail" data-modal-toggle="modal-brochure-detail" class="buttons max-sm:text-sm max-sm:px-4 blue rounded-none mx-auto text-base min-w-48">Request E-Brochure</a>
            <a href="{{ route('testdrive') }}" class="buttons max-sm:text-sm max-sm:px-4 bg-gray-100 text-black/80 hover:bg-gray-200 rounded-none mx-auto text-base min-w-48">Request a Test Drive</a>
        </div>
    </div>
</div>

<!-- E-Brochure modal -->
@include("components.request-ebrochure", ["nameModal" => "modal-brochure-detail", "data" => "car"])