<?php

namespace App\Http\Controllers;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use App\Domain\Info\Queries\GetAllInfosQuery;
use App\Domain\Page\Queries\GetAllPagesQuery;
use App\Domain\Producer\Queries\GetAllProducersQuery;
use App\Domain\Project\Queries\GetAllProjectsQuery;

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
//        $articles = $this->dispatch(new GetAllArticlesQuery(true));
//        $news = $this->dispatch(new GetAllInfosQuery(true));

        $producers = $this->dispatch(new GetAllProducersQuery());
        $projects = $this->dispatch(new GetAllProjectsQuery());

        return response()
            ->view('sitemap.index', [
                'pages' => $pages,
                'producers' => $producers,
                'projects' => $projects,
//                'articles' => $articles,
//                'news' => $news
            ], 200)
            ->header('Content-Type', 'text/xml');
    }
}
