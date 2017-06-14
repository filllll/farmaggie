<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    // protected $fillable = [
    // 'account_title', 'account_name', 'account_surname', 'account_email', 'account_pass',
    // 'account_sex', 'account_DOB', 'account_mobile', 'account_nation', 'account_edu',
    // 'account_status', 'account_hno', 'account_moo', 'account_soi', 'accoun_road',
    // 'account_dis', 'account_subdis', 'account_province', 'account_postID', 'account_facebook',
    // 'account_line'
    // ];
    protected $guarded = ['account_id', 'created_at', 'updated_at'];

    public function farms()
    {
        return $this->hasMany('App\Farm', 'account_id', 'account_id');
    }
}
