<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Activity;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'projects';

    protected $fillable = [
        "description",
        "project_code",
        "hold_id",
        "planned_start",
        "planned_end"
    ];

    public function activities() {
        return $this->hasMany(Activity::class, 'project_id', 'id');
    }
}
