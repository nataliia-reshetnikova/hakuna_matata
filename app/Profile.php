<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //following very particular naming convention
    public function user(){
        return $this->belongsTo(User::class);
    }
}
