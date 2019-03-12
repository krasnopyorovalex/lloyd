<?php

namespace App\Http\ViewComposers;

use App\Domain\Producer\Queries\GetAllProducersQuery;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class ProducerComposer
 * @package App\Http\ViewComposers
 */
class ProducerComposer
{
    use DispatchesJobs;

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $producers = $this->dispatch(new GetAllProducersQuery());

        $view->with('producers', $producers);
    }
}
