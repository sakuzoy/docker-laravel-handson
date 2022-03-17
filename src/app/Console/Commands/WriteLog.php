<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WriteLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'writelog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ログ出力';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        logger('test');
        return 0;
    }
}
