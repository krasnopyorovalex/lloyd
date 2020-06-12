<?php

namespace App\Http\Middleware;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use App\Domain\Info\Queries\GetAllInfosQuery;
use App\Domain\OurService\Queries\GetAllOurServicesQuery;
use App\Domain\Page\Queries\GetAllPagesQuery;
use App\Domain\Producer\Queries\GetAllProducersQuery;
use App\Domain\Project\Queries\GetAllProjectsQuery;
use App\Domain\Service\Queries\GetAllServicesQuery;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ShortCodeMiddleware
{
    use DispatchesJobs;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** @var $response Response */
        $response = $next($request);

        if ( ! method_exists($response, 'content')) {
            return $response;
        }

        $content = preg_replace_callback_array(
            [
                '#(<p(.*)>)?{sitemap}(<\/p>)?#' => function () {
                    $pages = $this->dispatch(new GetAllPagesQuery());
//                    $producers = $this->dispatch(new GetAllProducersQuery());
//                    $projects = $this->dispatch(new GetAllProjectsQuery());
                    $articles = $this->dispatch(new GetAllArticlesQuery(true));
                    //$news = $this->dispatch(new GetAllInfosQuery(true));

                    return view('layouts.shortcodes.sitemap', [
                        'pages' => $pages,
//                        'producers' => $producers,
//                        'projects' => $projects,
                        'articles' => $articles,
                        //'news' => $news
                    ]);
                }
            ],
            $response->content()
        );

        $response->setContent($content);

        return $response;
    }
}
