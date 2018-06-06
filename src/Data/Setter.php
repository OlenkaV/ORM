<?php

/*
 * This file is part of the Orm/orm package
 * 
 * @author   Orm < @Orm.com>
 */

namespace Orm\Data;

/**
 * Provides writable attributes
 * by replacing the PHP magic __set with a function per property.
 */
Trait Setter {

    final public function __set($name, $value) {
        $method = 'set' . $name;
        if (is_callable([$this, $method])) {
            $this->{$method}($value);
        } else {
            $this->{'__' . $method}($value);
        }
    }

}
