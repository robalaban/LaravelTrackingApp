<?php

use Illuminate\Database\Seeder;
use Crockett\CsvSeeder\CsvSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Calling Our Seeder
    	$this->call(PackageTableCsv::class);
    }
}
