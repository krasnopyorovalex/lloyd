<section class="well bg-light border producers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-primary text-center">Поставщики</h2>
            </div>
        </div>
        <div class="row">
            @foreach($producers as $producer)
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                    <div class="box">
                        @if($producer->icon)
                            <div class="box_aside">
                                <img src="{{ asset($producer->icon) }}" alt="{{ $producer->name }}"/>
                            </div>
                        @endif
                        <div class="box_cnt box_cnt__no-flow">
                            <h5 class="strong">{{ $producer->name }}</h5>
                        </div>
                    </div>
                    @if($producer->image)
                        <a href="{{ $producer->url }}" class="thumb">
                            <img src="{{ $producer->image->path }}" alt="{{ $producer->image->alt }}" title="{{ $producer->image->title }}"/>
                            <span class="thumb_overlay"></span>
                        </a>
                    @endif

                    <p class="big">{!! strip_tags($producer->preview) !!}</p>
                    <a class="btn1" href="{{ $producer->url }}">Подробнее >></a>
                </div>
            @endforeach
        </div>
    </div>
</section>
