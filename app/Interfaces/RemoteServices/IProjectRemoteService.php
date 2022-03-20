<?php


namespace App\Interfaces\RemoteServices;

interface IProjectRemoteService {
    public function findById($id);
    public function findPaginated($page = null,$elementsByPage = null, $holdId = null, $description = null, $plannedStart = null, $plannedEnd = null);
    public function create($project);
    public function update($id, $project);
    public function delete($id);
}
