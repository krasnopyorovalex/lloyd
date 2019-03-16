<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Producer\Commands\CreateProducerCommand;
use App\Domain\Producer\Commands\DeleteProducerCommand;
use App\Domain\Producer\Commands\UpdateProducerCommand;
use App\Domain\Producer\Queries\GetAllProducersQuery;
use App\Domain\Producer\Queries\GetProducerByIdQuery;
use App\Domain\Tab\Queries\GetAllTabsQuery;
use App\Http\Controllers\Controller;
use Domain\Producer\Requests\CreateProducerRequest;
use Domain\Producer\Requests\UpdateProducerRequest;

/**
 * Class ProducerController
 * @package App\Http\Controllers\Admin
 */
class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producers = $this->dispatch(new GetAllproducersQuery);

        return view('admin.producers.index', [
            'producers' => $producers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tabs = $this->dispatch(new GetAllTabsQuery());

        return view('admin.producers.create', [
            'tabs' => $tabs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateProducerRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateProducerRequest $request)
    {
        $this->dispatch(new CreateProducerCommand($request));

        return redirect(route('admin.producers.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producer = $this->dispatch(new GetProducerByIdQuery($id));
        $tabs = $this->dispatch(new GetAllTabsQuery());

        $relatedTabs = get_ids_from_array($producer->tabs->toArray());

        return view('admin.producers.edit', [
            'producer' => $producer,
            'tabs' => $tabs,
            'relatedTabs' => $relatedTabs
        ]);
    }

    /**
     * @param $id
     * @param UpdateProducerRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, UpdateProducerRequest $request)
    {
        $this->dispatch(new UpdateProducerCommand($id, $request));

        return redirect(route('admin.producers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteProducerCommand($id));

        return redirect(route('admin.producers.index'));
    }
}
