<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Industry\Queries\GetAllIndustriesQuery;
use App\Domain\Project\Commands\CreateProjectCommand;
use App\Domain\Project\Commands\DeleteProjectCommand;
use App\Domain\Project\Commands\UpdateProjectCommand;
use App\Domain\Project\Queries\GetAllProjectsQuery;
use App\Domain\Producer\Queries\GetAllProducersQuery;
use App\Domain\Project\Queries\GetProjectByIdQuery;
use App\Http\Controllers\Controller;
use Domain\Project\Requests\CreateProjectRequest;
use Domain\Project\Requests\UpdateProjectRequest;

/**
 * Class ProjectController
 * @package App\Http\Controllers\Admin
 */
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->dispatch(new GetAllProjectsQuery);

        return view('admin.projects.index', [
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producers = $this->dispatch(new GetAllProducersQuery());
        $industries = $this->dispatch(new GetAllIndustriesQuery());

        return view('admin.projects.create', [
            'producers' => $producers,
            'industries' => $industries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateProjectRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateProjectRequest $request)
    {
        $this->dispatch(new CreateProjectCommand($request));

        return redirect(route('admin.projects.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = $this->dispatch(new GetProjectByIdQuery($id));
        $producers = $this->dispatch(new GetAllProducersQuery());
        $industries = $this->dispatch(new GetAllIndustriesQuery());

        return view('admin.projects.edit', [
            'project' => $project,
            'producers' => $producers,
            'industries' => $industries
        ]);
    }

    /**
     * @param $id
     * @param UpdateProjectRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, UpdateProjectRequest $request)
    {
        $this->dispatch(new UpdateProjectCommand($id, $request));

        return redirect(route('admin.projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteProjectCommand($id));

        return redirect(route('admin.projects.index'));
    }
}
