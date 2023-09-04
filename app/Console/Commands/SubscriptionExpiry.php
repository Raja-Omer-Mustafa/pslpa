<?php

namespace App\Console\Commands;


use App\Models\RegForm;
use Illuminate\Support\Env;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use App\Mail\SubscriptionExpired;
use Illuminate\Support\Facades\Mail;

class SubscriptionExpiry extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:subscription-expiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::now()->toDateString();
        $expiredUsers = RegForm::whereDate('expire_at', '=', $today)->get();
        
        foreach ($expiredUsers as $user) {
            $user->status = 0;
            $user->save();
            Mail::to($user->email_id)->send(new SubscriptionExpired($user));
        }

        $this->info('Expired subscription check complete.');
    }
}
