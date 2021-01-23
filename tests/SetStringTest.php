<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AssertTest
 *
 * @author hm
 */

class Text {
	private $string;
	function __construct($string) {
		$this->string = $string;
	}
}

class SetStringTest extends TestCase {
	function testArrayNotUnique() {
		$set = new SetString();
		$ambigue = array("Hund", "Katze", "Maus", "Maus", "Katze", "Hund");
		$unique = array("Hund", "Katze", "Maus");
		foreach($ambigue as $value) {
			$set->addValue($value);
		}
		$this->assertEquals($unique, $set->getArray());
	}
	
	function testGetArray() {
		$set = new SetString();
		$set->addValue("Hund");
		$set->addValue("Hund");
		$set->addValue("Katze");
		$set->addValue("Maus");
		$this->assertEquals(array("Hund", "Katze", "Maus"), $set->getArray());
	}

	
	function testInSet() {
		$set = new SetString();
		$set->addValue("Hund");
		$set->addValue("Katze");
		$set->addValue("Maus");
		$this->assertEquals(TRUE, $set->contains("Hund"));
	}
	
	function testNotInSet() {
		$set = new SetString();
		$set->addValue("Hund");
		$set->addValue("Katze");
		$set->addValue("Maus");
		$this->assertEquals(FALSE, $set->contains("Tyrannosaurus Rex"));
	}

}
