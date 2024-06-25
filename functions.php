<?php

	/**
	 * Die & dump function. Dump the value then die it.
	 * @param mixed $data
	 * @return void
	 */
	function dd(mixed $data): void {
		echo '<pre>';
		die(var_dump($data));
		echo '</pre>';
	}

	/**
	 * Checks if the person is of legal age.
	 * @param int $age The age of the person.
	 * @return boolean
	 */
	function is_legal_age(int $age): bool {
		return $age >= 21 ? true : false;
	}

	/**
	 * Make a PDO to your mysql.
	 *
	 * @return PDO
	 */
	function connectToDB(): PDO {
		try {
			return new PDO(dsn:'mysql:host=127.0.0.1;dbname=todo_db', username:'root', password:'');
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	/**
	 * Get all the tasks in the database.
	 *
	 * @param PDO $pdo
	 * @return array|false
	 */
	function fetchAllTasks(PDO $pdo): array|false {
		$statement = $pdo->prepare('SELECT * FROM todos_t');
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); 
	}

