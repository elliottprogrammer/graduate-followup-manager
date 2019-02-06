<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $dates = ['created_at', 'updated_at', 'graduation_date', 'date_of_birth', 'last_contacted', 'next_call_date'];
    
    public function graduate() {
        return $this->belongsTo('App\Graduate');
    }
}
