<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Channel extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'description',
        'cover',
        'avatar',
        'active'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getCoverImage()
    {
        // if($this->cover) {
        //     return config('calismokinbodies.buckets.images') . "channel/cover" . $this->cover;
        // }

        //return config('calismokinbodies.buckets.images') . "default-cover.jpg";
    }

    public function getAvatarImage()
    {
        // if($this->avatar) {
        //     return config('calismokinbodies.buckets.images') . "channel/avatar/" . $this->avatar;
        // }

        // return config('calismokinbodies.buckets.images') . "default-avatar.jpg";
    }

    public function videos() {
        return $this->hasMany(Video::class);
    } 

    public function subscriptions()
    {
        //return $this->hasMany(Subscription::class);
    }

    public function subscriptionCount()
    {
        //return $this->subscriptions->count();
    }
}
