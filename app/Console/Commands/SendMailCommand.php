<?php

namespace App\Console\Commands;

use App\Jobs\SendMailOrderJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-mail';

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
        $this->info('Sending mail...' . date('Y-m-d H:i:s'));
        //Mail::to('tung.pnq@gmail.com')
        //    ->send(new \App\Mail\OrderShipped());

        SendMailOrderJob::dispatch();
        
        $this->info('Complete at: ' . date('Y-m-d H:i:s'));
        // You can also use the following line to send the mail
    }
}
