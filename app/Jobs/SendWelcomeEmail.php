<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWelcomeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
/*    public $timeout = 1;*/
/*    public $tries = 3;*/
    public $tries = -1;
    // wait 2 seconds before retrying the job
    public $backoff = 2;
    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        throw new \Exception('Something went wrong');
        sleep(3);
    }
    public function retryUntil(): \DateTime
    {
        return now()->addSeconds(5);
    }

}
