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
        'user_id', 'pack_id', 'name', 'description', 'shared_code', 'views', 'likes', 'size'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $hidden = ['deleted_at'];

    /**
     * Get the user associated with the sticker.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Get the pack that owns the sticker.
     */
    public function pack()
    {
        return $this->belongsTo('App\Pack');
    }

    /**
     * The categories that belong to the sticker.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    /**
     * The tags that belong to the sticker.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
