<?php

namespace App\Domain\User\Jobs;

use Illuminate\Bus\Queueable;
use App\Services\SendInfo\SendInfo;
use App\Services\SendInfo\Telegram;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\Log;

class NotifyOperatorJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $telegram = new Telegram($this->message);
        try {
            $response = new SendInfo($telegram);
            if(isset($response->ok) && $response->ok) {
                return true;
            }
        } catch (\Throwable $th) {
            Log::error(sprintf("Error Message: %s, Line: %s, File: %s", $th->getMessage(), $th->getLine(), $th->getFile()));
        }
    }
}
