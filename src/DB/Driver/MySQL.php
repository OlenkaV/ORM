<?php

namespace Orm\DB\Driver;

use \PDO;

class MySQL extends \Orm\DB\Driver\SQL {

    public function __construct($host, $db, $user, $password, $character = 'utf8') {
        try {
            $this->connection = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=' . $character, $user, $password);

            $this->connection->query('SET NAMES ' . $character . ';');
        } catch (Orm\Exception $e) {
            echo 'Error MySQL connection (' . $e->getCode() . '): ', $e->getMessage(), "\n";
        }
    }

}
