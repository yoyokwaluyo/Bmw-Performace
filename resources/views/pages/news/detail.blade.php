@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="relative">
    <img src="{{ asset('image/Bitmap1.jpg') }}" alt="image" class="w-full h-[550px] object-cover hidden md:block">
    <img src="{{ asset('image/Bitmap1.jpg') }}" alt="image" class="w-full block md:hidden">
</div>

<div class="container md:w-[90%] mx-auto px-4">
    <div class="my-24 space-y-8">
        <div class="text-3xl">iXclusive Breakfast at Pison Cafe Thamrin: A Blend of Breakfast, BMW iX, and Sustainability.</div>
        <div class="space-y-4">
            <p>Thamrin, Jakarta - October 30, 2023 - The elegant ambiance of Pison Cafe Thamrin came alive as it played host to the iXclusive Breakfast event on Saturday, October 28, 2023. This event marked a fusion of delectable breakfast, in-depth discussions on the BMW iX, and a spotlight on the sustainability.</p>
            <p>Amidst the cozy setting of Pison Cafe Thamrin, guests were treated to a sumptuous breakfast spread that included a wide array of culinary delights, from Sunrise Breakfast, Cappucino, Chocolate, and Fresh Juice. The event attendees savored the taste of luxury right from the first bite.</p>
            <p>But the iXclusive Breakfast was more than just a culinary experience; it was an opportunity for like-minded individuals to delve into the world of electric vehicles, particularly the BMW iX. A panel of experts shared insights on the latest innovations in electric vehicle technology and the BMW iX's contribution to sustainable mobility.</p>
            <p>BMW representatives were present to provide a firsthand look at the stunning BMW iX, showcasing on screen its cutting-edge features, and commitment to sustainability. The BMW iX, with its electric powertrain and eco-friendly materials, epitomizes the company's dedication to reducing its environmental footprint.</p>
            <p>One of the most impactful segments of the event was the discussion on sustainability. Guests engaged in meaningful conversations about the importance of sustainable practices in their daily lives. Speakers highlighted the urgency of adopting eco-conscious choices to address climate change and preserve the environment for future generations.</p>
            <p>The iXclusive Breakfast was a gathering that combined luxury and sustainability, leaving attendees inspired to make positive changes in their lives. As sustainability becomes an increasingly vital aspect of daily life, events like these play a crucial role in raising awareness and inspiring individuals to take action.</p>
            <p>The event's success showcased the potential of combining indulgence and environmental responsibility.</p>
            <p>As attendees left the event, they carried with them not just a taste of luxury but a renewed commitment to sustainability and a greater understanding of the BMW iX's role in shaping a greener future.</p>
            <p>The iXclusive Breakfast at Pison Cafe Thamrin was indeed a unique experience where guests indulged in gourmet breakfast, explored the future of electric vehicles, and came together to champion sustainability - a morning to remember for those who appreciate the intersection of luxury, technology, and environmental responsibility.</p>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection