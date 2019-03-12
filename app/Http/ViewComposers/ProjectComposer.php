<?php

namespace App\Http\ViewComposers;

use App\Domain\Project\Queries\GetAllProjectsQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class ProjectComposer
 * @package App\Http\ViewComposers
 */
class ProjectComposer
{
    use DispatchesJobs;

    private static $projects;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        if (! self::$projects) {
            self::$projects = $this->dispatch(new GetAllProjectsQuery());
        }

        $projectsInMain = self::$projects->filter(function ($item) {
            return $item->in_main === '1';
        });

        $view->with('projectsInMain', $projectsInMain);
        $view->with('projects', self::$projects);
    }
}
