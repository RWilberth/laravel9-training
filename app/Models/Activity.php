<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Project;

class Activity extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'activities';
    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
