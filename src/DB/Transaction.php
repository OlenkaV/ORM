<?php

namespace Orm\DB;

interface Transaction {

    public function begin();

    public function commit();

    public function rollBack();
}
