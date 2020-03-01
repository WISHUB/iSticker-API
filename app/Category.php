<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $hidden = ['categorizable_id', 'categorizable_type', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Get all of the owning categorizable models.
     */
    public function categorizable()
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
