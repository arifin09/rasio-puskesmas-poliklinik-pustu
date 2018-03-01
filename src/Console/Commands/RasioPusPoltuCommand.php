<?php namespace Bantenprov\RasioPusPoltu\Console\Commands;

use Illuminate\Console\Command;

/**
 * The RasioPusPoltuCommand class.
 *
 * @package Bantenprov\RasioPusPoltu
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioPusPoltuCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:rasio-puspoltu';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\RasioPusPoltu package';

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
        $this->info('Welcome to command for Bantenprov\RasioPusPoltu package');
    }
}
