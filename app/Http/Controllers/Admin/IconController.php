<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Icon\Queries\GetAllIconsQuery;
use App\Domain\Icon\Commands\CreateIconCommand;
use App\Domain\Icon\Commands\DeleteIconCommand;
use App\Domain\Icon\Commands\UpdateIconCommand;
use App\Domain\Icon\Queries\GetIconByIdQuery;
use App\Http\Controllers\Controller;
use Domain\Icon\Requests\CreateIconRequest;
use Domain\Icon\Requests\UpdateIconRequest;

/**
 * Class IconController
 * @package App\Http\Controllers\Admin
 */
class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icons = $this->dispatch(new GetAllIconsQuery());

        return view('admin.icons.index', [
            'icons' => $icons
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.icons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateIconRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateIconRequest $request)
    {
        $this->dispatch(new CreateIconCommand($request));

        return redirect(route('admin.icons.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $icon = $this->dispatch(new GetIconByIdQuery($id));

        return view('admin.icons.edit', [
            'icon' => $icon
        ]);
    }

    /**
     * @param $id
     * @param UpdateIconRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, UpdateIconRequest $request)
    {
        $this->dispatch(new UpdateIconCommand($id, $request));

        return redirect(route('admin.icons.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteIconCommand($id));

        return redirect(route('admin.icons.index'));
    }
}
