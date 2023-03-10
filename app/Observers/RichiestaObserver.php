<?php

namespace App\Observers;

use App\Mail\RichiestaShipped;
use App\Models\Richiesta;

class RichiestaObserver
{
    /**
     * Handle the Richiesta "created" event.
     *
     * @param  \App\Models\Richiesta  $richiesta
     * @return void
     */
    public function created(Richiesta $richiesta)
    {
        \Mail::to('coltrida@gmail.com')->send(new RichiestaShipped($richiesta));
    }

    /**
     * Handle the Richiesta "updated" event.
     *
     * @param  \App\Models\Richiesta  $richiesta
     * @return void
     */
    public function updated(Richiesta $richiesta)
    {
        //
    }

    /**
     * Handle the Richiesta "deleted" event.
     *
     * @param  \App\Models\Richiesta  $richiesta
     * @return void
     */
    public function deleted(Richiesta $richiesta)
    {
        //
    }

    /**
     * Handle the Richiesta "restored" event.
     *
     * @param  \App\Models\Richiesta  $richiesta
     * @return void
     */
    public function restored(Richiesta $richiesta)
    {
        //
    }

    /**
     * Handle the Richiesta "force deleted" event.
     *
     * @param  \App\Models\Richiesta  $richiesta
     * @return void
     */
    public function forceDeleted(Richiesta $richiesta)
    {
        //
    }
}
