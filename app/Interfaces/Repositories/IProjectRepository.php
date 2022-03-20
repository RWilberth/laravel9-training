<?php


namespace App\Interfaces\Repositories;

interface IProjectRepository {
    public function findById($id);
    public function findPaginated($elementsByPage, $holdId, $description, $plannedStart, $plannedEnd);
}
