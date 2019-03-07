<?php

namespace App\Http\Controllers;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use App\Domain\Info\Queries\GetAllInfosQuery;
use App\Domain\Page\Queries\GetAllPagesQuery;

/**
 * Class SitemapController
 * @package App\Http\Controllers
 */
class SitemapController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function xml()
    {
        $pages = $this->dispatch(new GetAllPagesQuery());
        $articles = $this->dispatch(new GetAllArticlesQuery(true));
        $news = $this->dispatch(new GetAllInfosQuery(true));

        return response()
            ->view('sitemap.index', [
                'pages' => $pages,
                'articles' => $articles,
                'news' => $news
            ], 200)
            ->header('Content-Type', 'text/xml');
    }
}
