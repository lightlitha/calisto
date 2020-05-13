<?php

namespace App\Observers;

use App\Channel;

class ChannelObserver
{
    /**
     * Listen to the Channel creating event.
     *
     * @param  User  $user
     * @return void
     */
    public function creating(Channel $channel)
    {
        $channel->user_id = auth()->user() ? auth()->user()->id : null;
    }

}
