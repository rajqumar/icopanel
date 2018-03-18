<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model{
    protected $table = 'footer';
    protected $fillable = [
    	'facebook', 'linkedin', 'twitter', 'github', 'instagram', 'bitcointalk','telegram','reddit', 'footerdesc', 'copyright'
    ];
}
