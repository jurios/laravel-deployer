<?php


namespace Kodilab\LaravelDeployer\Commands;


use Illuminate\Console\Command;
use Kodilab\Deployer\Deployer;

class DeployCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deployer:deploy
                                {--prod-commit= : The production full SHA-1 commit checksum }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deploy project';

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
     */
    public function handle()
    {
        deploy_it(
            ".",
            config('deployer'),
            $this->option('prod-commit')
        );
    }
}