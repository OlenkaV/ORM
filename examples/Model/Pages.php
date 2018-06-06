<?php

namespace Model;

use Orm\Entity;

/**
 * @tableName pages
 */
class Pages extends Entity {

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var text
     */
    protected $description;


    /**
     * @param integer $id
     * @return integer $id
     */
    public function setId($id) {
        return $this->id = $id;
    }

    /**
     * @return integer $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $name
     * @return string $name
     */
    public function setName($name) {
        return $this->name = $name;
    }
    
    /**
     * @return string $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param text $description
     * @return text $description
     */
    public function setDescription($description) {
        return $this->description = $description;
    }
    
    /**
     * @return text $description
     */
    public function getDescription() {
        return $this->description;
    }

}
