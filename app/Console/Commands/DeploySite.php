<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeploySite extends Command
{
	protected $signature = 'site:deploy';
	protected $description = 'Run Artisan commands for deployment';
  
	public function handle()
	{
		$this->call('migrate', ['--force' => true]);
		$this->call('route:cache');
		$this->call('view:cache');
		$this->call('config:cache');
	}
}
