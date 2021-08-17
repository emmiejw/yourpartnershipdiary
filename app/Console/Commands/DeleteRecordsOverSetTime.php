<?php

namespace App\Console\Commands;

use App\Diary;
use Illuminate\Console\Command;

class DeleteRecordsOverSetTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deleteOldRecords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete records over 18 months old';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $records = Diary::whereDate('date_bg', '<', date('Y-m-d', strtotime('-1 year')))->delete();
        echo "Deleted messages over a year old \n";
    }
}
