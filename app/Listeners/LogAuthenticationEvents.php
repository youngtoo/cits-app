<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;

class LogAuthenticationEvents
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        if($event instanceof Login){
            $this->logActivity($event->user->id, 'login');
        }
        elseif($event instanceof Logout) {
            $this->logActivity($event->user->id, 'logout');
        }
    }

    protected function logActivity($userId, $action){
        DB::table('logs')->insert([
            'user_id'   => $userId,
            'action'    => $action,
            'created_at'=> now(),
        ]);
    }
}
