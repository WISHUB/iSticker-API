<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User as UserResource;


class Sticker extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'creator' => new UserResource($this->whenLoaded('user')),
            'category' => $this->whenLoaded('category'),
            'tags' => $this->whenLoaded('tags'),
            'pack' => $this->whenLoaded('pack'),
            'shared_code' => $this->shared_code,
            'views' => $this->views,
            'likes' => $this->likes,
            'size' => $this->size,
            'last_update' => $this->updated_at->diffForHumans(),
            'creation_date' => $this->created_at->diffForHumans()
        ];
    }
}
