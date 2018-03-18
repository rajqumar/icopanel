<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model{
    protected $table = 'about';
    protected $fillable = [
    	'heading', 'para1', 'para2', 'video_link', 'bg_image'
    ];
}
