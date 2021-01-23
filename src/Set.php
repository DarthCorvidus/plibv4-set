<?php
/**
 * Simple wrapper around array and in_array, which guarantees that every value
 * within an array is unique.
 *
 * @author Claus-Christoph Kuethe
 * @copyright (c) 2020, Claus-Christoph Kuethe
 */
abstract class Set {
	private $set = array();
	function __construct() {
		$this->set = array();
	}
	
	/**
	 * 
	 * @param type $value
	 * @return void
	 */
	protected function addInternalValue($value) {
		if($this->contains($value)) {
			return;
		}
	$this->set[] = $value;
	}
	
	/**
	 * Returns set as array.
	 * @return array
	 */
	function getArray(): array {
		return $this->set;
	}
	
	/**
	 * Shortcut for in_array($needle, getArray()).
	 * @param type $needle
	 * @return bool
	 */
	protected function containsInternal($needle): bool {
		return in_array($needle, $this->set);
	}
}
