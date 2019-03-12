<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Industry\Queries\GetAllIndustriesQuery;
use App\Domain\Industry\Commands\CreateIndustryCommand;
use App\Domain\Industry\Commands\DeleteIndustryCommand;
use App\Domain\Industry\Commands\UpdateIndustryCommand;
use App\Domain\Industry\Queries\GetIndustryByIdQuery;
use App\Http\Controllers\Controller;
use Domain\Industry\Requests\CreateIndustryRequest;
use Domain\Industry\Requests\UpdateIndustryRequest;

/**
 * Class IndustryController
 * @package App\Http\Controllers\Admin
 */
class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industries = $this->dispatch(new GetAllIndustriesQuery());

        return view('admin.industries.index', [
            'industries' => $industries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.industries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateIndustryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateIndustryRequest $request)
    {
        $this->dispatch(new CreateIndustryCommand($request));

        return redirect(route('admin.industries.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industry = $this->dispatch(new GetIndustryByIdQuery($id));

        return view('admin.industries.edit', [
            'industry' => $industry
        ]);
    }

    /**
     * @param $id
     * @param UpdateIndustryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, UpdateIndustryRequest $request)
    {
        $this->dispatch(new UpdateIndustryCommand($id, $request));

        return redirect(route('admin.industries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteIndustryCommand($id));

        return redirect(route('admin.industries.index'));
    }
}
