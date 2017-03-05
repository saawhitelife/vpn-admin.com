<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['user_name', 'user_email','company_id'];
    protected $primaryKey = 'user_id';


    public function company()
    {
        return $this->belongsTo('App\Company', 'company_id', 'company_id');
    }

}