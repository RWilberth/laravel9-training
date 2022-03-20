<?php

namespace App\Repositories;

use App\Models\Project;
use App\Interfaces\Repositories\IProjectRepository;

class ProjectRepository  implements IProjectRepository
{
    public function findById($id){
        return Project::findOrFail($id);
    }

    public function findPaginated($elementsByPage, $holdId, $description, $plannedStart, $plannedEnd){
        $query = Project::select();
        if($holdId) {
            $query = $query->where('hold_id', $holdId);
        }
        if($description) {
            $query = $query->where('description', 'like', $description.'%');
        }
        if($plannedStart) {
            $query = $query->where('planned_start', '>=', $plannedStart);
        }
        if($plannedEnd) {
            $query = $query->where('planned_end', '<=', $plannedEnd);
        }
        return $query->paginate($elementsByPage)->withQueryString();
    }
}
