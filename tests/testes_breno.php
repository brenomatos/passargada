<?php
use PHPUnit\Framework\TestCase;

class MyScriptTest extends TestCase {
    public function testMyFunction() {
	
	$servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "passargada";
        $result = $dbname;

        $this->assertEquals('passargada', $result);
    }
}
?>
