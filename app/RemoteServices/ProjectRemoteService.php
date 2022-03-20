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
        return Http::get("{$this->baseUrlProjectApi}/{$id}")->json();
    }
    public function findPaginated($page = null,$elementsByPage = null, $holdId = null, $description = null, $plannedStart = null, $plannedEnd = null) {
        return Http::acceptJson()->get("{$this->baseUrlProjectApi}")->json();
    }
    public function create($project) {

    }
    public function update($id, $project) {

    }
    public function delete($id) {

    }
}
