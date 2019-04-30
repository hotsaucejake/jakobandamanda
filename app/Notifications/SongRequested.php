<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
// use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;

class SongRequested extends Notification
{
    // use Queueable;

    protected $name;
    protected $song;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(String $name = 'Anonymous', String $song)
    {
        $this->name = $name;
        $this->song = $song;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    /**
     * Get the slack representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toSlack($notifiable)
    {
        $content = '*Name:* ' . $this->name . ' :musical_note: :musical_note: :musical_note: *Song Request:* ' . $this->song;

        return (new SlackMessage)
                    ->content($content);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
