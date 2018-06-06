<?php

namespace Orm\DB\Driver;

use \PDO;

class Oracle extends \Orm\DB\Driver\SQL {

    public function __construct($host, $db, $user, $password, $character = 'utf8') {
        try {
            $this->connection = new PDO('oci:host=' . $host . ';dbname=' . $db, $user, $password);

            $this->connection->query('SET NAMES ' . $character . ';');
        } catch (Orm\Exception $e) {
            echo 'Error Oracle connection (' . $e->getCode() . '): ', $e->getMessage(), "\n";
        }
    }

}
