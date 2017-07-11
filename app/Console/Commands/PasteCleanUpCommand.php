<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Paste;
use Illuminate\Console\Command;

class PasteCleanUpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paste:cleanup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will remove expired pastes';

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
        // find all expired pastes
        $pastes = Paste::whereDate('expires_at', '<', Carbon::now())->get();

        // $pastes->each(function($paste) {
        //     $paste->delete();
        // });

        $pastes->each->delete();

        $this->info('Removed '. $pastes->count());
    }
}
