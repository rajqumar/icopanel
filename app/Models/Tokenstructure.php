<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tokenstructure extends Model{
    protected $table ='tokenstructure';
    protected $fillable = [
    	'description', 'community', 'reserved', 'founders', 'advisors', 'bounty'
    ];
}
