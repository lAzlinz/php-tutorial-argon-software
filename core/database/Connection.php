<?php

class Connection {
    protected PDO $pdo;

    public static function make(array $config): PDO {
        try {
			$dsn = $config['connection'] . ':host='. $config['host'] . ';dbname=' . $config['name'];
			return new PDO(
				$dsn,
				$config['username'],
				$config['password'],
				$config['options']
			);
			// return new PDO(dsn:'mysql:host=127.0.0.1;dbname=todo_db', username:'root', password:'');
		} catch (PDOException $e) {
			echo 'ERORRR!';
			die($e->getMessage());
		}
    }

    /**
	 * Make a PDO to your mysql.
	 *
	 * @return PDO
	 */
	// function connectToDB(): PDO {
		
	// }
}