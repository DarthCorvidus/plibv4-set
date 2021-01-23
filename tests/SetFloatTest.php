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
class SetFloatTest extends TestCase {
	function testArrayNotUnique() {
		$set = new SetFloat();
		$ambigue = array(1.1, 2.2, 3.3, 4.4, 4.4, 3.3, 2.2, 1.1);
		$unique = array(1.1, 2.2, 3.3, 4.4);
		foreach($ambigue as $value) {
			$set->addValue($value);
		}
		$this->assertEquals($unique, $set->getArray());
	}
	
	function testGetArray() {
		$set = new SetFloat();
		$set->addValue(9.81);
		$set->addValue(9.81);
		$set->addValue(18.72);
		$set->addValue(27.63);
		$set->addValue(36.54);
		$this->assertEquals(array(9.81, 18.72, 27.63, 36.54), $set->getArray());
	}
	
	function testInSet() {
		$set = new SetFloat();
		$set->addValue(9.81);
		$set->addValue(18.72);
		$set->addValue(27.63);
		$set->addValue(36.54);
		$this->assertEquals(TRUE, $set->contains(9.81));
	}
	
	function testNotInSet() {
		$set = new SetFloat();
		$set->addValue(9.81);
		$set->addValue(18.72);
		$set->addValue(27.63);
		$set->addValue(36.54);
		$this->assertEquals(FALSE, $set->contains(45.45));
	}

}
