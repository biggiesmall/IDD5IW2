<?php

require 'Calculator.php';
use PHPUnit\Framework\TestCase;
class CalculatorTest extends TestCase {

	private $calculator;

	/**
	* @covers Calculator::add
	*/
	public function testAddNominal() {
		$result = $this->calculator->add(3, 1);
		$this->assertEquals(4, $result);
	}

	/**
	* @covers Calculator::sub
	*/
	public function testSubNominal() {
		$result = $this->calculator->sub(3, 1);
		$this->assertEquals(2, $result);
	}

	/**
	* @covers Calculator::mul
	*/
	public function testMulNominal() {
		$result = $this->calculator->mul(3, 1);
		$this->assertEquals(3, $result);
	}

	/**
	* @covers Calculator::div
	*/
	public function testDivNominal() {
		$result = $this->calculator->div(3, 1);
		$this->assertEquals(3, $result);
	}



	/**
	* @covers Calculator::avg
	*/
	public function testAvgNominal() {
		$array = array(1, 2, 3);
		$result = $this->calculator->avg($array);
		$this->assertEquals(2, $result);
	}


	/*public function testAvgWithNoElement() {
		$array = array();
		$result = $this->calculator->avg($array);
		$this->assertEquals(0, $result);
	}*/

	protected function setUp() {
		$this->calculator = new Calculator();
	}
	 
	protected function tearDown() {
		$this->calculator = NULL;
	}

	/*public function sendemail($emailReceive, $messageContent){
        throw new Exception('No implemented');
	}
	*/

}

?>
