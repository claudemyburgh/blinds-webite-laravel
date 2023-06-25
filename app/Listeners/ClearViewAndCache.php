<?php

namespace App\Listeners;

use App\Events\UpdateData;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Artisan;

class ClearViewAndCache implements ShouldQueue
{

    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ModelsUpdate  $event
     * @return void
     */
    public function handle(UpdateData $event)
    {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
    }
}
