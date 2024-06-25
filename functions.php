<?php

	/** Die & dump function. Dump the value then die it.
	  * @param mixed $data
	  * @return void
	  */
	function dd(mixed $data): void {
		echo '<pre>';
		die(var_dump($data));
		echo '</pre>';
	}

	/** Checks if the person is of legal age.
	  * @param int $age The age of the person.
	  * @return boolean
	  */
	function is_legal_age(int $age): bool {
		return $age >= 21 ? true : false;
	}

