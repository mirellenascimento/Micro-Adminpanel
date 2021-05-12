<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public function getCompany(){
        return $this->belongsTo('App\Company');
    }

    protected $fillable = ['firstname','lastname','email','phone','company_id'];

}
