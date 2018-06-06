<?php

/*
 * This file is part of the Orm/orm package
 * 
 * @author   Orm < @Orm.com>
 */

namespace Orm\Data\Type;

use Orm\Data\Type;

class Integer extends Type {

    protected $min, $max;

    public function __construct($name, $min = null, $max = null) {
        parent::__construct($name);

        $this->min = $min;
        $this->max = $max;
    }

    public function sanitize($value) {
        if (!preg_match('/^\s*([+-]?\d+)/', $value, $m)) {
            return null;
        }

        $value = (int) $m[1];

        if ($this->min !== null && $value < $this->min) {
            return $this->min;
        } elseif ($this->max !== null && $value > $this->max) {
            return $this->max;
        } else {
            return $value;
        }
    }

}
