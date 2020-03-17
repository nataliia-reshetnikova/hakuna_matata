<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : "profile/wfi2js7wkvTDyCTh1Adk9bTzku1dQzZl3od9t3Ld.jpeg";
        return '/storage/'.$imagePath;
    }
    //following very particular naming convention
    public function user(){
        return $this->belongsTo(User::class);
    }
}
