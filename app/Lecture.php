<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'email',
        'introduction'
    ];


    public function courses(){
        return $this->belongsToMany(Course::class);
    }

}
