<?php

/*
 * This file is part of the Orm/orm package
 * 
 * @author   Orm < @Orm.com>
 */

namespace Orm\Data\Type;

use Orm\Data\Type;

class Datetime extends Type {

    protected $format;

    public function __construct($name, $format) {
        parent::__construct($name);

        $this->format = $format;
    }

    public function sanitize($value) {
        if ($value === null) {
            return null;
        }

        if (!$value instanceof \DateTime) {
            $value = new \DateTime($value);
        }

        return $value->format($this->format);
    }

}
