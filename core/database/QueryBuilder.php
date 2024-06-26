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
			return $convertToClass::convertAllTo($statement->fetchAll(PDO::FETCH_CLASS));
		} else {
			return $statement->fetchAll(PDO::FETCH_CLASS);
		}
	}

	public function insert(string $tableName, array $fields) {

		$sql = sprintf(
			'INSERT INTO %s (%s) VALUES (%s)',
			$tableName,
			implode(', ', array_keys($fields)),
			':' . implode(', :', array_keys($fields))
		);

		try {
			$statement = $this->pdo->prepare($sql);
			$statement->execute($fields);
		} catch (PDOException $e) {
			die('Whoops, something went wrong.');
		}

	}
}