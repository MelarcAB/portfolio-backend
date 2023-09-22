<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Requests\ContactMailRequest;
use App\Services\ContactMailService;
use Illuminate\Support\Facades\Log;

class testMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test-mail';

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
        $contactMailService = new ContactMailService();
        try {
            $details = [
                'name' => 'Marc',
                'email' => 'marc.arino.barcelo@gmail.com',
                'txt' => 'Mensaje de prueba'
            ];
            $contactMailService->sendMail($details);
            Log::info('Email de contacto enviado correctamente. Detalles: ' . json_encode($details));
            //info
            echo "Email de contacto enviado correctamente. Detalles: " . json_encode($details);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}