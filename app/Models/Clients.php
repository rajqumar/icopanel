<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model{
    protected $table = 'clients';
    protected $fillable = [
    	'client_image1', 'client_image2', 'client_image3', 'client_image4', 'client_image5'
    ];
}
