<?php 
require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'pft.php';

class PftTest extends PHPUnit_Framework_TestCase
{
	public function testMethodEC() {
		$this->expectOutputString('POG');
		ec('POG');
	}
	
	public function testMethodPR() {
		$this->expectOutputString('POG');
		pr('POG');
	}
	
	public function testMethodVD() {
		$this->expectOutputRegex('/(string\(3\) \"POG\")/');
		vd("POG");
	}
	
	public function testMethodGB() {
		$this->assertEmpty(g('*.txt'));
	}
}
