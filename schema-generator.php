<?php

require 'vendor/autoload.php';

use TryingSqlReserved\Generator\Schema;
use TryingSqlReserved\Config;

$schema = new Schema(Config::DBNAME); 
$schema->create();
