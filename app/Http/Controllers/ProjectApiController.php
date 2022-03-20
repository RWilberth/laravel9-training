<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectListResource;
use Illuminate\Validation\Rule;
use App\Interfaces\Repositories\IProjectRepository;

class ProjectApiController extends Controller
{
    /**
     * The user repository implementation.
     *
     * @var IProjectRepository
     */
    protected $projectRepository;

    public function __construct(IProjectRepository $projectRepository){
        $this->projectRepository = $projectRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $elementsByPage = $request->query('elementsByPage', 10);
        $holdId = $request->query('hold_id');
        $description = $request->query('description');
        $plannedStart = $request->query('planned_start');
        $plannedEnd = $request->query('planned_end');
        $projects = $this->projectRepository->findPaginated($elementsByPage, $holdId, $description, $plannedStart, $plannedEnd);
        return new ProjectListResource($projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'project_code' => 'required|unique:projects|max:250',
            'hold_id' => 'required|max:64',
            'planned_start' => 'required|date_format:Y-m-d',
            'planned_end' => 'required|date_format:Y-m-d|after_or_equal:planned_start'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
        }
        $project = new Project($request->all());
        $project->save();
        return new ProjectResource($project);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return new ProjectResource($this->projectRepository->findById($request->project));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $project = $this->projectRepository->findById($request->project);
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'project_code' => [
                'required',
                Rule::unique('projects')->ignore($project),
                'max:250'
            ],
            'hold_id' => 'required|max:64',
            'planned_start' => 'required|date_format:Y-m-d',
            'planned_end' => 'required|date_format:Y-m-d|after_or_equal:planned_start'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), Response::HTTP_BAD_REQUEST);
        }
        $project->fill($request->all());
        $project->save();
        return new ProjectResource($project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $project = $this->projectRepository->findById($request->project);
        $project->delete();
        return response()->json(null);
    }
}
