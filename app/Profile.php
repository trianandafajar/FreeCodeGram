<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    /**
     * Get the full URL for the profile image.
     *
     * @return string
     */
    public function profileImage()
    {
        $imagePath = $this->image ?? 'profile/default.png';
        return asset('storage/' . $imagePath);
    }

    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The users that follow this profile.
     */
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
