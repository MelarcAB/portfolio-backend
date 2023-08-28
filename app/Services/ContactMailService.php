<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class ContactMailService
{
    public function sendMail($details)
    {
        Mail::send('emails.contact', $details, function ($message) use ($details) {
            $message->to(env('CONTACT_MAIL_TO'))
                ->subject('[MELARC.DEV] Nuevo mensaje de  ' . $details['name']);
        });
    }
}
