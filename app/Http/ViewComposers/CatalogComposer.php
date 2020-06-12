<?php

namespace App\Http\ViewComposers;

use App\Domain\Catalog\Queries\GetAllCatalogsQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CatalogComposer
 * @package App\Http\ViewComposers
 */
class CatalogComposer
{
    use DispatchesJobs;

    private static $catalog;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        if (! self::$catalog) {
            self::$catalog = $this->dispatch(new GetAllCatalogsQuery());
        }

        $view->with('catalog', self::$catalog);
    }
}
