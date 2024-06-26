<?php

namespace GUILLMZ\GoogleMerchantApi\Listeners;

use GUILLMZ\GoogleMerchantApi\Facades\ProductApi;

class ProductCreatedOrUpdatedListener
{
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
     * @param  any  $event
     * @return void
     */
    public function handle($event)
    {
        ProductApi::insert($event->product)->catch(function(){
            //
        });
    }
}