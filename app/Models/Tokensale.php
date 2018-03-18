<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tokensale extends Model{
    protected $table = 'tokensale';
    protected $fillable = [
    	'heading', 'start_date', 'contract_address', 'exchange_rate', 'hardcap', 'softcap', 'protocol', 'token'
    ];
}
