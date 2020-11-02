<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class NewApplicant extends Notification
{
    use Queueable;

    private $detail;

    public function __construct($detail)
    {
        $this->detail = $detail;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
//        return ['database'];
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hello ')
                    ->line('You have a new applicant on your job')
                    ->line('')
                    ->line(Auth::user()->name.' just applied for '.$this->detail->title)
//                    ->action('View Applicant', route('profile',Auth::user()->username))
                    ->action('View Job', route('jobs.job.view',$this->detail->slug))
                    ->line('Thank you for using Trades Experience');
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
            'name'      =>  Auth::user()->name,
            'message'      =>  ' Applied for your job '.$this->detail->title,
            'user'         =>   Auth::user()->username,
            'link'          =>  route('jobs.job.view',$this->detail->slug),
            'avatar'        =>  Auth::user()->avatar
        ];
    }
}
