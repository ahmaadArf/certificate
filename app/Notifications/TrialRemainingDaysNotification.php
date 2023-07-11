<?php

namespace App\Notifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Carbon\Carbon;

class TrialRemainingDaysNotification extends Notification
{
    use Queueable;
    public $remainingDays;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($remainingDays)
    {
        $this->remainingDays = $remainingDays;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $trialEndsAt = Carbon::parse(Auth::user()->trial_ends_at);
        $remainingDays = $trialEndsAt->diffInDays(Carbon::now());
        return (new MailMessage)->view('emails.trail.start', [
            'remainingDays' => $remainingDays,
        ]);
    
        // ->subject('Trial Period Remaining')
        // ->line("Your trial period is ending soon.")
        // ->line("You have " . $remainingDays . " days remaining in your trial period.")
        // ->action('Upgrade Your Plan', url('/plans'))
        // ->line('Thank you for using our application!');
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
