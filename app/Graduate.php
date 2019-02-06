<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{

    protected $dates = ['created_at', 'updated_at', 'graduation_date', 'date_of_birth', 'last_contacted', 'next_call_date'];
    
    public function notes() {
        return $this->hasMany('App\Note')->orderBy('date', 'DESC');
    }
}
