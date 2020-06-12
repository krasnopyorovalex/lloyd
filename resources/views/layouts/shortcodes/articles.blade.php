<div class="row list__items" itemscope="" itemtype="http://schema.org/BlogPosting" itemprop="BlogPost">
    @foreach ($articles as $article)
        <div class="col-md-6 col-sm-12 col-xs-12 center991">
            <div itemscope="" itemprop="image" itemtype="http://schema.org/ImageObject" class="img">
                <figure>
                    <a href="{{ $article->url }}">
                        <img itemprop="url contentUrl" src="{{ asset($article->image->path) }}" class="img-add" alt="{{ $article->image->alt }}" title="{{ $article->image->title }}">
                        <meta itemprop="url" content="{{ asset($article->image->path) }}">
                        <meta itemprop="width" content="365">
                        <meta itemprop="height" content="330">
                    </a>
                </figure>
            </div>
            <div class="text-wrap">
                <div class="date">
                    <time itemprop="datePublished" datetime="{{ $article->published_at->format('c') }}">
                        {{ $article->published_at->formatLocalized('%d %b %Y') }} г.
                    </time>
                </div>
                <a href="{{ $article->url }}" class="name">{{ $article->name }}</a>
                <div itemprop="articleBody" class="text">
                    {!! $article->preview !!}
                </div>
                <a href="{{ $article->url }}" class="btn2 btn2__color_mod read-more">Читать далее</a>
            </div>
        </div>
    @endforeach
</div>
<div class="pagination">
    {{ $articles->links() }}
</div>
