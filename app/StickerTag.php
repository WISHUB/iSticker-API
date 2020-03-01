<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StickerTag extends Model
{
    use SoftDeletes;

    protected $table = 'sticker_tag';
}
