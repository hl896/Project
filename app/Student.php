<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $fillable =[
        'first_name',
        'last_name',
        'email'
    ];


    public function courses(){
        return $this->belongsToMany(Course::class);

    }
/*
    protected $appends =[
        'name'
    ];
    public function  getNameAttribute(){
        return $this->first_name.' '.$this->last_name;

    }
*/


}
