<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    public $incrementing = false;
    protected $primaryKey = 'company_id';

    public function users() {

        return $this->hasMany('App\User', 'company_id', 'company_id');
    }
}
