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
     * Get the user associated with the pack.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Get the stickers for the pack.
     */
    public function stickers()
    {
        return $this->hasMany('App\Sticker');
    }

    /**
     * The categories that belong to the pack.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    /**
     * The tags that belong to the pack.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
