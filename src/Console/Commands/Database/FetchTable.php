<?php

namespace Emeka\Console\Commands\Database;

use Emeka\Console\Commands\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Database\Capsule\Manager as Capsule;
use Symfony\Component\Console\Input\InputInterFace;
use Symfony\Component\Console\Output\OutputInterFace;

class FetchTable extends Command
{
	/**
	* command configure
	*/
	public function configure()
	{
		$this
		->setName('myapp:fetch-table')
		->setDescription('Fetch table record from database.')
		->addArgument('table', InputArgument::REQUIRED, 'enter a valid database table name is required.');
	}

	/**
	* command execute 
	*/
	public function execute(InputInterFace $input, OutputInterFace $output)
	{
		$table = $input->getArgument('table');
		$data = Capsule::table($table)->get()->toJson();

        $output->writeln($data);

	}
}