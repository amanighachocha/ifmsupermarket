<?php

namespace App\Providers;

use App\Providers\SaleRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendSMSNotificationToStudent implements ShouldQueue
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
     * @param  SaleRegistered  $event
     * @return void
     */
    public function handle(SaleRegistered $event)
    {
        // Send SMS notification
        $sms = new SMSSender;
        $sms->number = '+255752310155',
        $sms->message = 'Thank your purchasing in IFM Supermarket. Your recipt No is '.$event->sale->receipt_no;
        $sms->send();

    }
}
