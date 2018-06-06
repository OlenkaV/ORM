<?php

/*
 * This file is part of the Orm/orm package
 * 
 * @author   Orm < @Orm.com>
 */

namespace Orm\Data\Type;

use Orm\Data\Type;

class Boolean extends Type {

    public function __construct($name) {
        parent::__construct($name);
    }

    public function sanitize($value) {
        return (is_bool($value)) ? $value : null;
    }

}
