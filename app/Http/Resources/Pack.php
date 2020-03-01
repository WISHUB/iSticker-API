<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Sticker as StickerResource;

class Pack extends JsonResource
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
            'description' => $this->description,
            'creator' => new UserResource($this->whenLoaded('user')),
            'stickers' => $this->whenLoaded('stickers'),
            'category' => $this->whenLoaded('categories'),
            'tags' => $this->whenLoaded('tags'),
            'shared_code' => $this->shared_code,
            'views' => $this->views,
            'likes' => $this->likes,
            'size' => $this->size,
            'last_update' => $this->updated_at->diffForHumans(),
            'creation_date' => $this->created_at->diffForHumans()
        ];
    }
}
