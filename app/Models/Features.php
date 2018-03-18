<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Features extends Model{
    protected $table = 'features';
    protected $fillable = [
    	'icon1', 'title1', 'desc1','icon2', 'title2', 'desc2', 'icon3', 'title3', 'desc3','icon4', 'title4', 'desc4'
    ];
}
