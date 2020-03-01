<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sticker extends Model
{
    use SoftDeletes;

    protected $table = 'stickers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'category_id', 'pack_id', 'name', 'shared_code', 'views', 'likes', 'size'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

    /**
     * Get the user that owns the sticker.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the pack that owns the sticker.
     */
    public function pack()
    {
        return $this->belongsTo('App\Pack');
    }

    /**
     * The category that belong to the sticker.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')
            ->orderBy('popularity', 'desc')
            ->orderBy('name', 'asc');
    }
}
