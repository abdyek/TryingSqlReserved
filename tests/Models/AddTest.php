<?php

require 'vendor/autoload.php';
require 'propel/config.php';
use PHPUnit\Framework\TestCase;
use TryingSqlReserved\Models\Add;

/**
 * @covers Add::
 */

class AddTest extends TestCase {
    public function testGetByAlter() {
        $add = Add::create();
        $alter = Add::getByAlter(true);
        $this->assertNotNull($alter);
    }
    // ^ will generated for all column
}
