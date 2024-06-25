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
	public function selectAll(string $tableName, callable $converter): array|false {
		$statement = $this->pdo->prepare("SELECT * FROM {$tableName}");
		$statement->execute();
		return $converter($statement->fetchAll(PDO::FETCH_CLASS));
	}
}