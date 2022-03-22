<?php


namespace App\Interfaces\Repositories;

interface IProjectRepository {
    public function findById($id);
    public function findPaginated($elementsByPage, $projectCode, $description, $plannedStart, $plannedEnd);
}
