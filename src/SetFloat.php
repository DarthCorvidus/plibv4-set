<?php
/**
 * Implementation for float. Note that PHP accepts an int as float.
 *
 * @author Claus-Christoph Kuethe
 * @copyright (c) 2020, Claus-Christoph Kuethe
 */
class SetFloat extends Set {
	/**
	 * 
	 * @param float $value
	 * @return void
	 */
	function addValue(float $value) {
		$this->addInternalValue($value);
	}

	/**
	 * Shortcut for in_array($needle, getArray()).
	 * @param float $needle
	 * @return bool
	 */
	function contains(float $needle): bool {
		return $this->containsInternal($needle);
	}
}
