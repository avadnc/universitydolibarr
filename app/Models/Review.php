<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //inverse one to many

    public function user()
    {
        return $this->fbelongsTo('App\Models\User');
    }

    public function course()
    {
        return $this->fbelongsTo('App\Models\Course');
    }

}
