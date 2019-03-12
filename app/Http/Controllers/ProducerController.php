<?php

namespace App\Http\Controllers;

use App\Domain\Producer\Queries\GetProducerByAliasQuery;

/**
 * Class ProducerController
 * @package App\Http\Controllers
 */
class ProducerController extends Controller
{
    /**
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(string $alias)
    {
        $producer = $this->dispatch(new GetProducerByAliasQuery($alias));

        return view('producer.index', [
            'producer' => $producer
        ]);
    }
}
