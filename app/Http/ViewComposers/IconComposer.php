<?php

namespace App\Http\ViewComposers;

use App\Domain\Icon\Queries\GetAllIconsQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class IconComposer
 * @package App\Http\ViewComposers
 */
class IconComposer
{
    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $icons = $this->dispatch(new GetAllIconsQuery());

        $view->with('icons', $icons);
    }
}
