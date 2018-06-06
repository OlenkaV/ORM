<?php

/*
 * This file is part of the Orm/orm package
 * 
 */

namespace Orm\Mapping;

interface Driver {

    public function getTableName($object);

    public function getFields($object);
}
