<section class="well">
    <div class="container">
        <div class="row">
            <div class="icons">
                @foreach($icons as $icon)
                    <div class="icon">
                        @if($icon->image)
                            <div class="img">
                                <a href="{{ $icon->link }}">
                                    <img src="{{ $icon->image->path }}" alt="{{ $icon->image->alt }}" title="{{ $icon->image->title }}">
                                </a>
                            </div>
                        @endif
                        <div class="name">
                            <a href="{{ $icon->link }}">{{ $icon->name }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
