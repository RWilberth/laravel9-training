<?php

namespace App\RemoteServices;


use Illuminate\Support\Facades\Http;
use App\Interfaces\RemoteServices\IProjectRemoteService;

class ProjectRemoteService implements IProjectRemoteService {

    protected $baseUrlProjectApi;

    public function __construct($baseUrlProjectApi) {
        $this->baseUrlProjectApi = "{$baseUrlProjectApi}/projects";
    }

    public function findById($id) {
        return Http::get("{$this->baseUrlProjectApi}/{$id}")->object();
    }
    public function findPaginated($page = null,$elementsByPage = null, $projectCode = null, $description = null, $plannedStart = null, $plannedEnd = null) {
        return Http::acceptJson()->get("{$this->baseUrlProjectApi}", [
            'page' => $page,
            'elementsByPage' => $elementsByPage,
            'project_code' => $projectCode,
            'description' => $description
        ])->object();
    }
    public function create($project) {
        return Http::acceptJson()->post("{$this->baseUrlProjectApi}", $project)->object();
    }
    public function update($id, $project) {
        return Http::acceptJson()->put("{$this->baseUrlProjectApi}/{$id}", $project)->object();
    }
    public function delete($id) {
        return Http::acceptJson()->delete("{$this->baseUrlProjectApi}/{$id}")->object();
    }
}
