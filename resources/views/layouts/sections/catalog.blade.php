<div class="well well__ins2 bg-light projects__in-main">
    <div class="container">
        <div class="h2 text-primary text-center">Каталог</div>
        <div class="row">
            @foreach($catalog as $item)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="box2">
                        <a class="thumb" href="{{ $item->url }}">
                            @if($item->image)
                            <img src="{{ $item->image->path }}" alt="{{ $item->image->alt }}" title="{{ $item->image->title }}">
                            <span class="thumb_overlay"></span>
                            @endif
                        </a>

                        <div class="box2_cnt">
                            <h5 class="strong">
                                <a href="{{ $item->url }}">{{ $item->name }}</a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="button-wrap">
            <a class="btn2" href="{{ route('page.show', ['alias' => 'o-kompanii']) }}">Направления компании</a>
            <a class="btn2 btn2__color_mod" href="{{ route('page.show', ['alias' => 'catalog']) }}">Все проекты</a>
        </div>
    </div>
</div>
