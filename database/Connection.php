<?php

class Connection {
    protected PDO $pdo;

    public static function make(): PDO {
        try {
			return new PDO(dsn:'mysql:host=127.0.0.1;dbname=todo_db', username:'root', password:'');
		} catch (PDOException $e) {
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