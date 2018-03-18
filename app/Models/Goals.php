<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goals extends Model{
    protected $table = 'goals';
    protected $fillable = [
    	'light_heading', 'heading', 'para', 'token_price', 'participants'
    ];
}
