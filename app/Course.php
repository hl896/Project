<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //


    protected $fillable= [
        'name',
        'code',
        'start_at',
        'end_at',
        'introduction'
    ];



    public function students(){
        return $this->belongsToMany(Student::class);
    }

    public function lectures(){
        return $this->belongsToMany(Lecture::class);

    }


}
