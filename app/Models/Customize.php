<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customize extends Model{
    protected $table = 'customize';
    protected $fillable = [
    	'onepager', 'ico_start', 'softcap_days', 'progress', 'marker', 'ethereum_address', 'litecoin_address','ripple_address', 'bitcoin_address', 'media_head1', 'media_head2', 'media_head3', 'media_desc1', 'media_desc2', 'media_desc3', 'contract_desc'
    ];
}
