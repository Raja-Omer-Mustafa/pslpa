<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionExpired;
use App\Models\RegForm;
use Illuminate\Support\Env;

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
        $expirationDate = now()->subDays(env('SUBSCRIPTION_DAYS')); // Calculate expiration date 30 days ago
        $expiredUsers = RegForm::where('updated_at', '<', $expirationDate)->get();
        
        foreach ($expiredUsers as $user) {
            $user->status = 0;
            $user->save();
            Mail::to($user->email_id)->send(new SubscriptionExpired($user));
        }

        $this->info('Expired subscription check complete.');
    }
}
