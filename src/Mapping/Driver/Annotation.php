<?php

/*
 * This file is part of the Orm/orm package
 * 
 */

namespace Orm\Mapping\Driver;

use Orm\Mapping\Driver;
use Orm\Mapping\Driver\Reader;

class Annotation implements Driver {

    private $reader = null;

    public function __construct() {
        $this->reader = Reader::getInstance();
    }

    public function getTableName($object) {
        $t = $this->reader->init(get_class($object));
        return $t->getParameter('tableName');
    }

    public function getFields($object) {
        
    }

}
