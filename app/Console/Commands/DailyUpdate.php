<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TrialEndNotification;
use App\Models\User;
use Carbon\Carbon;

class DailyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'day:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily email to all the users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
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
