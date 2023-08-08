<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
//skill types resource
use App\Http\Resources\SkillTypesResource;

class SkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'percentage' => $this->percentage,
            'skill_types' => new SkillTypesResource($this->skill_types()->first())
        ];
    }
}
