<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name ?? '',
            'slug' => $this->slug ?? '',
            'description' => $this->description ?? '',
            'image' => $this->image ?? '',
            'git_url' => $this->git_url ?? '',
            'demo_url' => $this->demo_url ?? '',
            'date' => $this->date ?? '',
            'labels' => $this->labels ?? [],

        ];
    }
}
