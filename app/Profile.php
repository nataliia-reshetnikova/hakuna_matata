<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? '/storage/'.$this->image :'/img/wfi2js7wkvTDyCTh1Adk9bTzku1dQzZl3od9t3Ld.jpeg';
        return $imagePath;
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    //following very particular naming convention
    public function user(){
        return $this->belongsTo(User::class);
    }

}
