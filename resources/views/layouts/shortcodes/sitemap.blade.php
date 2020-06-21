<ul class="sitemap">
    @if(count($pages))
        @foreach($pages as $page)
            <li>
                <a href="{{ route('page.show', ['alias' => $page->alias]) }}">{{ $page->name }}</a>
                @if(strstr($page->text,'{articles}') && count($articles))
                    <ul>
                        @foreach($articles as $article)
                            <li>
                                <a href="{{ $article->url }}">{{ $article->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                @if(strstr($page->text,'{catalog}') && count($catalogs))
                    <ul>
                        @foreach($catalogs as $catalog)
                            <li>
                                <a href="{{ $catalog->url }}">{{ $catalog->name }}</a>
                                @if(count($catalog->products))
                                    <ul>
                                        @foreach($catalog->products as $product)
                                            <li>
                                                <a href="{{ $product->url }}">{{ $product->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
{{--                @if(strstr($page->text,'{news}') && count($news))--}}
{{--                    <ul>--}}
{{--                        @foreach($news as $new)--}}
{{--                            <li>--}}
{{--                                <a href="{{ $new->url }}">{{ $new->name }}</a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                @endif--}}
            </li>
        @endforeach
    @endif
</ul>
