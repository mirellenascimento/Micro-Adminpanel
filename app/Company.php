<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function getEmployee(){
        return $this->hasMany('App\Employee');
    }

    protected $fillable = ['name','email','logo','website'];
}
