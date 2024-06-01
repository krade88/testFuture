<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotebookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id' => $this->id,
          'company' => $this->company,
          'phone' => $this->phone,
          'email' => $this->email,
          'birthdate' => $this->birthdate,
          'photo' => $this->photo,
        ];
    }
}
