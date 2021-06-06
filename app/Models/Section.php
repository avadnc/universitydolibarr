<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //one to many inverse

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    // one to many

    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }

}
