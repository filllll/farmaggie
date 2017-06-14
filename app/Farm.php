<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $table = 'farms';
    protected $guarded = ['farm_id', 'created_at', 'updated_at'];

    public function accounts()
    {
    	return $this->belongsTo('App\Account');
    }

    public function pigs()
    {
    	return $this->hasMany('App\Pig', 'farm_id', 'farm_id');
    }
}
