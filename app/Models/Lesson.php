<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
        protected $guarded = ['id'];

    use HasFactory;

    // invers relationship

    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function platform()
    {
        return $this->belongsTo('App\Models\Platform');
    }

    // one to one

    public function description()
    {
        return $this->hasOne('App\Models\Description');
    }

    // many to many

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    //polymorphic one to one

    public function resource()
    {
        return $this->morphOne('App\Models\Resource','resourceable');
    }

    //polymorphic one to many

    public function comments()
    {
        return $this->morphMany('App\Models\Comments', 'commentable');
    }

    public function reactions()
    {
        return $this->morphMany('App\Models\Reaction','reactionable');
    }

}
