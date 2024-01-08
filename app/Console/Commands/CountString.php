<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CountString extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'split';

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
        DB::table('employees')->orderBy('salaries','desc')->limit(1)->offset(1)->first();
    }
}
