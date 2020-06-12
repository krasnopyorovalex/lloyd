<div class="row project__box">
    @foreach($catalog as $item)
    <div class="col-md-4">
        <div class="project">
            @if($item->image)
            <figure>
                <a href="{{ $item->url }}">
                    <img src="{{ asset($item->image->path) }}" alt="{{ $item->image->alt }}" title="{{ $item->image->title }}">
                </a>
            </figure>
            @endif
            <div class="desc">
                <div class="name">
                    <a href="{{ $item->url }}">{{ $item->name }}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
