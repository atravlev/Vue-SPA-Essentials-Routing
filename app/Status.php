<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];

    protected $with = ['user'];
    
    public function user()
    {
        return $this->belongsTo(User::class)
            ->select(['id', 'name']);
    }
}
