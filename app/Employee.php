<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public function getCompany(){
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    protected $fillable = ['first_name','last_name','email','phone','company_id'];

}
