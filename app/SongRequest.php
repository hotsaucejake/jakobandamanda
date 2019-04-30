<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class SongRequest extends Model
{
    use Notifiable;

    protected $fillable = ['name', 'song'];


    /**
     * Route notifications for the Slack channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForSlack($notification)
    {
        return env('WEDDING_SLACK');
    }
}
