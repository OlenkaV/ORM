<?php

/*
 * This file is part of the Orm/orm package
 * 
 * @author   Orm < @Orm.com>
 */

namespace Orm\Data\Type;

use Orm\Data\Type;
use \Orm\Entity;

class Entity extends Type {

    public function __construct($name) {
        parent::__construct($name);
    }

    public function sanitize($value) {
        if ($value instanceof Entity) {
            return $value;
        } else {
            return null;
        }
    }

}
