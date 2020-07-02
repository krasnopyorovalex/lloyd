@if(count($slider->images))
<section class="border-top">
    <div class="owl-carousel owl-theme main-slider">
        @foreach($slider->images as $image)
            <div class="item">
                <img src="{{ asset($image->getPath()) }}" alt="{{ $image->alt }}">
                <div class="camera_caption">
                    <h2>{{ $image->name }}</h2>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endif