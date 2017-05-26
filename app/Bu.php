<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    protected $table = 'bus';

    protected $fillable = [
        'bu_name', 'bu_price', 'bu_rent', 'bu_rooms', 'bu_square', 'bu_type'
        , 'bu_small_dis', 'bu_meta', 'bu_langtuide', 'bu_place', 'bu_large_dis'
        , 'bu_status','image'
    ];

    public function users()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
