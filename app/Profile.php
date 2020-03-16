<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    //following very particular naming convention
    public function user(){
        return $this->belongsTo(User::class);
    }
}
