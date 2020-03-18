<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? '/storage/'.$this->image :'/img/noImage.jpeg';
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
