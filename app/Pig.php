<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pig extends Model
{
    protected $table = 'pigs';
    protected $table = ['pig_id', 'created_at', 'updated_at'];
}
