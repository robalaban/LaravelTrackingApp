<?php

use Crockett\CsvSeeder\CsvSeeder;

class PackageTableCsv extends CsvSeeder {

    public function __construct()
    {
        $this->filename = base_path('database/seeds/csv/packageInfo.csv');
        $this->table = 'packages';
    }

    public function run()
    {
        parent::run();
    }
}