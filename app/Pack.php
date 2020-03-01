<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pack extends Model
{
    use SoftDeletes;

    protected $table = 'packs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'description', 'shared_code', 'views', 'likes', 'size'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

    /**
     * Get the user that owns the pack.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the stickers for the pack.
     */
    public function stickers()
    {
        return $this->hasMany('App\Sticker')
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->orderBy('name', 'asc');
    }

    /**
     * Get all of the categories for the post.
     */
    public function categories()
    {
        return $this->morphMany('App\Category', 'categorizable')
            ->orderBy('popularity', 'desc')
            ->orderBy('name', 'asc');
    }

    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphMany('App\Tag', 'taggable')
            ->orderBy('popularity', 'desc')
            ->orderBy('name', 'asc');
    }
}
