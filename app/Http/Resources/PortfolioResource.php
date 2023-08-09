<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioResource extends JsonResource
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
            'description' => $this->description ?? '',
            'image' => $this->image ?? '',
            'git_url' => $this->git_url ?? '',
            'job_title' => $this->job_title ?? '',
            'current_company' => $this->current_company ?? '',
            'current_company_website' => $this->current_company_website ?? '',
            'linkedin_url' => $this->linkedin_url ?? '',
            'city' => $this->city ?? '',
            'country' => $this->country ?? '',


        ];
    }
}
