<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TrialEndNotification;
use App\Models\User;
use Carbon\Carbon;


class NotifyTrialEndsTomorrow implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tomorrow = Carbon::now()->addDay();
        $users = User::where('trial_ends_at', $tomorrow->toDateString())->get();

        foreach ($users as $user) {
            Notification::send($user, new TrialEndNotification());
        }
    }
}
