<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Interfaces\RemoteServices\IProjectRemoteService;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
    * The user repository implementation.
    *
    * @var IProjectRemoteService
    */
   protected $projectRemoteService;

   public function __construct(IProjectRemoteService $projectRemoteService){
       $this->projectRemoteService = $projectRemoteService;
   }
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page = $request->query('page', 1);
        $description = $request->query('description');
        $code = $request->query('code');
        $projectsDataPaginated = $this->projectRemoteService->findPaginated($page, 10, $code, $description);
        $lastPage = $projectsDataPaginated->meta->last_page;
        return view('projects.index', [
            'projectsDataPaginated' => $projectsDataPaginated,
            'formInputs' => $request->input(),
            'currentPage' => $page,
            'lastPage' => $lastPage
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $result = $this->projectRemoteService->create([
            "hold_id" => $request->input('hold_id'),
            'project_code' => $request->input('code'),
            'description' => $request->input('description'),
            'planned_start' => Carbon::createFromFormat("d/m/Y", $request->input('planned_start'))->format('Y-m-d'),
            'planned_end' => Carbon::createFromFormat("d/m/Y", $request->input('planned_end'))->format('Y-m-d')
        ]);
        return redirect('/projects')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $project = $this->projectRemoteService->findById($request->project)->data;
        $project->planned_start = Carbon::createFromFormat("Y-m-d", $project->planned_start)->format('d/m/Y');
        $project->planned_end = Carbon::createFromFormat("Y-m-d", $project->planned_end)->format('d/m/Y');
        return view('projects.update', ['project' => $project, 'isUpdate' => true]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request)
    {
        $result = $this->projectRemoteService->update($request->project, [
            "hold_id" => $request->input('hold_id'),
            'project_code' => $request->input('code'),
            'description' => $request->input('description'),
            'planned_start' => Carbon::createFromFormat("d/m/Y", $request->input('planned_start'))->format('Y-m-d'),
            'planned_end' => Carbon::createFromFormat("d/m/Y", $request->input('planned_end'))->format('Y-m-d')
        ]);
        return redirect('/projects')->with('success', 'Contact saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->projectRemoteService->delete($request->project);
        return redirect('/projects')->with('success', 'Contact saved!');
    }
}
