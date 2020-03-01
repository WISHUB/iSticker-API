<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $table = 'tags';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $hidden = ['taggable_id', 'taggable_type', 'created_at', 'updated_at', 'deleted_at', 'pivot'];

    /**
     * Get all of the owning taggable models.
     */
    public function taggable()
    {
        return $this->morphTo();
    }

    /**
     * The stickers that belong to the category.
     */
    public function stickers()
    {
        return $this->belongsToMany('App\Sticker');
    }
}
