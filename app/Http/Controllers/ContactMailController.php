<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

//ContactMailRequest
use App\Http\Requests\ContactMailRequest;
use App\Services\ContactMailService;
//log
use Illuminate\Support\Facades\Log;

class ContactMailController extends Controller
{

    protected $contactMailService;

    public function __construct(ContactMailService $contactMailService)
    {
        $this->contactMailService = $contactMailService;
    }

    public function send(ContactMailRequest $request)
    {
        try {
            $details = $request->only(['name', 'email', 'message']);
            //convertir message a "txt"
            $details['txt'] = $details['message'];
            $this->contactMailService->sendMail($details);
            Log::info('Email de contacto enviado correctamente. Detalles: ' . json_encode($details));
            return response()->json(['message' => 'Mensaje enviado correctamente']);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['message' => 'Error al enviar el mensaje'], 500);
        }
    }
}
