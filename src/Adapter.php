<?php

/*
 * This file is part of the Orm/orm package
 * 
 */

namespace Orm;

use Orm\DB\Driver as DB;
use Orm\Mapping\Driver as Mapping;

class Adapter {

    private $driver = null;
    private $mapping = null;

    /**
     * @param Orm\DB\Driver $driver
     */
    public function __construct(DB $driver, Mapping $mapping) {
        $this->driver = $driver;
        $this->mapping = $mapping;
    }

    public function getDriver() {
        return $this->driver;
    }

    /**
     * @param Orm\Model $object
     */
    public function save($object) {
        if ($this->exist($object, $this->getDriver()->id, $object->getId()) === false) {
            $res = $this->insert($object);
        } else {
            $res = $this->update($object);
        }

        return $res;
    }

    /**
     * @param Orm\Model $object
     */
    public function insert($object) {
        $tableName = $this->mapping->getTableName($object);
        $props = $object->getProperties();
		
        return $this->getDriver()->insert($tableName, $props);
    }

    /**
     * @param Orm\Model $object
     */
    public function update($object) {
        $tableName = $this->mapping->getTableName($object);
        $props = $object->getProperties();

        return $this->getDriver()->update($tableName, $props);
    }

    /**
     * @param Orm\Model $object
     */
    public function get($object) {
        $tableName = $this->mapping->getTableName($object);
        $props = $object->getProperties();
        
        $data = $this->getDriver()->get($tableName, $object->getId());

        if ($data) {
            foreach ($data as $k => $v) {
                $object->$k = $data->$k;
            }
        }

        return $object;
    }

    /**
     * @param Orm\Model $object
     */
    public function getAll($object) {
        $tableName = $this->mapping->getTableName($object);
        $dataArray = $this->getDriver()->getAll($tableName);
        $props = $object->getProperties();

        $className = get_class($object);
        $res = [];
        $i = 0;
        foreach ($dataArray as &$data) {
            $res[$i] = new $className();

            foreach ($data as $k => $v) {
                $res[$i]->$k = $data->$k;
            }
            $i++;
        }

        return $res;
    }

    /**
     * @param Orm\Model $object
     */
    public function deleteById($object) {
        $tableName = $this->mapping->getTableName($object);

        return $this->getDriver()->deleteById($tableName, $object->getId());
    }

    public function delete($object, $rowname, $value) {
        $tableName = $this->mapping->getTableName($object);

        return $this->getDriver()->delete($tableName, $rowname, $value);
    }

    /**
     * @param Orm\Model $object
     * 
     * @return integer
     */
    public function count($object) {
        $tableName = $this->mapping->getTableName($object);

        return $this->getDriver()->count($tableName);
    }

    public function exist($object, $rowname, $value) {
        $tableName = $this->mapping->getTableName($object);

        return $this->getDriver()->exist($tableName, $rowname, $value);
    }

}
