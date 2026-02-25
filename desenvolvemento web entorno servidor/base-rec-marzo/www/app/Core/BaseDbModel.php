<?php
declare(strict_types=1);

namespace Com\Daw2\Core;

abstract class BaseDbModel {
    protected \PDO $pdo;

    function __construct() {
        $this->pdo = DBManager::getInstance()->getConnection();      
    }

    public function getPage(array $filters): int
    {
        if (
            empty($filters['page']) ||
            filter_var($filters['page'], FILTER_VALIDATE_INT) === false ||
            (int)$_GET['page'] < 1
        ) {
            return 1;
        } else {
            return (int)$_GET['page'];
        }
    }
}
