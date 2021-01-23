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
class SetIntTest extends TestCase {
	function testArrayNotUnique() {
		$set = new SetInt();
		$ambigue = array(1, 2, 3, 4, 4, 3, 2, 1);
		$unique = array(1, 2, 3, 4);
		foreach($ambigue as $value) {
			$set->addValue($value);
		}
		$this->assertEquals($unique, $set->getArray());
	}
	
	function testInSet() {
		$set = new SetInt();
		$set->addValue(7);
		$set->addValue(14);
		$set->addValue(21);
		$this->assertEquals(TRUE, $set->contains(21));
	}
	
	function testNotInSet() {
		$set = new SetInt();
		$set->addValue(7);
		$set->addValue(14);
		$set->addValue(21);
		$this->assertEquals(FALSE, $set->contains(11));
	}

}
