<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
        protected $guarded = ['id'];
    use HasFactory;

    // inverse one to one

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }
}
