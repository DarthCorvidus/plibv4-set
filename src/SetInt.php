<?php
/**
 * Implementation of Set for int.
 *
 * @author Claus-Christoph Kuethe
 * @copyright (c) 2020, Claus-Christoph Kuethe
 */
class SetInt extends Set {
	/**
	 * 
	 * @param int $value
	 * @return void
	 */
	function addValue(int $value) {
		$this->addInternalValue($value);
	}

	/**
	 * Shortcut for in_array($needle, getArray()).
	 * @param int $needle
	 * @return bool
	 */
	function contains(int $needle): bool {
		return $this->containsInternal($needle);
	}
}
