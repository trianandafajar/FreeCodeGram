<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage()
    {
        $ImagePath = ($this->user->profile->image ? $this->user->profile->image : 'profile/rTUv9fiC8kFd8CX8MAeUx12HLnNK1hzCAIVscybb.png' );

        return '/storage/' . $ImagePath;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function followers()
    {
        return $this->belongsToMany('App\User');
    }
}
