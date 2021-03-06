<?php

/*
 * This file is part of the Orm/orm package
 * 
 * @author   Orm < @Orm.com>
 */

namespace Orm\Data;

class Type {

    use \Orm\Data\Getter,
        \Orm\Data\Setter;

    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function sanitize($value) {
        return $value;
    }

    protected function setName($name) {
        $this->name = (string) $name;
    }

    public function getName() {
        return $this->name;
    }

}
