<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function getEmployee(){
        return $this->hasMany(Employee::class);
    }

    protected $fillable = ['name','email','logo','website'];
}
