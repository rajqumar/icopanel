<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solutions extends Model{
    protected $table = 'solutions';
    protected $fillable = [
    	 'image1', 'image2', 'heading1', 'heading2', 'bold_para1', 'bold_para2', 'light_para1', 'light_para2'
    ];
}
