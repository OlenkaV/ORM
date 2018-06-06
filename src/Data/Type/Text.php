<?php

/*
 * This file is part of the Orm/orm package
 * 
 * @author   Orm < @Orm.com>
 */

namespace Orm\Data\Type;

use Orm\Data\Type;

class Text extends Type {

    protected $maxLength;

    public function __construct($name, $maxLength = null) {
        parent::__construct($name);

        $this->maxLength = $maxLength;
    }

    public function sanitize($value) {
        if ($value !== null) {
            $value = (string) $value;

            if ($this->maxLength !== null && $value !== '') {
                $value = substr($value, 0, $this->maxLength);
            }
        }

        return $value ? $value : null;
    }

}
