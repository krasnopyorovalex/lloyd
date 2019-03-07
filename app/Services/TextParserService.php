<?php

namespace App\Services;

use App\Domain\Article\Queries\GetAllArticlesQuery;
use App\Domain\Info\Queries\GetAllInfosQuery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class TextParserService
 * @package App\Services
 */
class TextParserService
{
    use DispatchesJobs;

    private const PAGINATE_LIMIT = 10;

    /**
     * @param Model $entity
     * @return string|string[]|null
     */
    public function parse(Model $entity)
    {
        return preg_replace_callback_array(
            [
                '#(<p(.*)>)?{articles}(<\/p>)?#' => function () use ($entity) {
                    $articles = $this->dispatch(new GetAllArticlesQuery(true, self::PAGINATE_LIMIT));

                    return view('layouts.shortcodes.articles', ['articles' => $articles]);
                },
                '#(<p(.*)>)?{news}(<\/p>)?#' => function () use ($entity) {
                    $news = $this->dispatch(new GetAllInfosQuery(true, self::PAGINATE_LIMIT));

                    return view('layouts.shortcodes.news', ['news' => $news]);
                }
            ],
            $entity->text
        );
    }

}
