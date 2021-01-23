<?php
/**
 * Implementation for string.
 *
 * @author Claus-Christoph Kuethe
 * @copyright (c) 2020, Claus-Christoph Kuethe
 */
class SetString extends Set {
	/**
	 * 
	 * @param string $value
	 * @return void
	 */
	function addValue(string $value) {
		$this->addInternalValue($value);
	}

	/**
	 * Shortcut for in_array($needle, getArray()).
	 * @param string $needle
	 * @return bool
	 */
	function contains(string $needle): bool {
		return $this->containsInternal($needle);
	}
}
