<?php

/*
 * This file is part of the Orm/orm package
 * 
 * @author   Orm < @Orm.com>
 */

namespace Orm\Data\Type;

use Orm\Data\Type;

class Float extends Type {

    public function __construct($name) {
        parent::__construct($name);
    }

    public function sanitize($value) {
        if (!is_scalar($value)) {
            return null;
        }

        if (gettype($value) === "float") {
            return $value;
        } else {
            return (preg_match("/^\\d+\\.\\d+$/", $value) === 1) ? $value : null;
        }
    }

}
