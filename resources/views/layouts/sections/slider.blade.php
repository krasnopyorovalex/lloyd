@if(count($slider->images))
    <section class="section-slider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider">
                        @foreach($slider->images as $image)
                            @if($image->link && $image->link !== '/') <a href="{{ $image->link }}">@endif
                            <div class="slide" itemscope itemtype="http://schema.org/ImageObject">
                                <img src="{{ asset($image->getPath()) }}" alt="{{ $image->alt }}" itemprop="contentUrl">
                                <div class="slide-text">
                                    <h2 itemprop="name">{{ $image->name }}</h2>
                                </div>
                            </div>
                            @if($image->link) </a>@endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif