<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:send-newsletter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envio de Correos ';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
