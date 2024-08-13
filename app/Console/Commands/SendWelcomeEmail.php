<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class SendWelcomeEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-welcome-email';

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
        try {
            //code...
            Mail::to('ianktoo@gmail.com')->queue(new  WelcomeMail());
            Log::info("Mail Sent");
            
        } catch (\Throwable $th) {
            //throw $th;
            Log::alert("Something went wrong.phpphp ");

        }
        

    }
}
