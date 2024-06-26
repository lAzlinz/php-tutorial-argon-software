<?php

class QueryBuilder {

    protected PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
	 * Get all the rows from a table.
	 *
	 * @param string $tableName The name of the table.
	 * @param string $intoClass The class the output will take.
	 * @return array|false
	 */
	public function selectAll(string $tableName, string $convertToClass): array|false {
		$statement = $this->pdo->prepare("SELECT * FROM {$tableName}");
		$statement->execute();
		if (is_subclass_of($convertToClass, IQueryConverter::class)) {
			echo 'Converted';
			return $convertToClass::convertAllTo($statement->fetchAll(PDO::FETCH_CLASS));
		} else {
			echo 'Not Converted';
			return $statement->fetchAll(PDO::FETCH_CLASS);
		}
	}

	public function addAccount(String $username, string $password): bool {
		$statement = $this->pdo->prepare(
			"INSERT INTO accounts_t (username, password) VALUES (:username, :password)"
		);

		$statement->bindParam(':username', $username);
		$statement->bindParam(':password', $password);
		return $statement->execute();
	}
}