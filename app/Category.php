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
    protected $hidden = ['deleted_at'];

    /**
     * The stickers that belong to the category.
     */
    public function stickers()
    {
        return $this->belongsToMany('App\Sticker');
    }

    /**
     * The packs that belong to the category.
     */
    public function packs()
    {
        return $this->belongsToMany('App\Pack');
    }
}
