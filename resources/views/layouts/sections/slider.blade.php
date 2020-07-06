@if(count($slider->images))
    <section class="section-slider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider">
                        @foreach($slider->images as $image)
                            <div class="slide">
                                <img src="{{ asset($image->getPath()) }}" alt="{{ $image->alt }}">
                                <div class="slide-text">
                                    <h2>{{ $image->name }}</h2>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif