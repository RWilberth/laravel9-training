<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'description' => $this->description,
            'hold_id' => $this->hold_id,
            'code' => $this->project_code,
            'planned_start' => $this->planned_start,
            'planned_end' => $this->planned_end,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at

        ];
    }
}
