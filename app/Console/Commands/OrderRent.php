<?php

namespace App\Console\Commands;

use App\Models\Order_rent;
use Carbon\Carbon;
use Illuminate\Console\Command;


class OrderRent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $date = Carbon::today('Asia/Ho_Chi_Minh');
        Order_rent::query()->update([
            'this_day' => $date,
        ]);
    }
}
