<?php
class typeModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getType()
    {
        $type = $this->_db->query("select * from my_type");
        return $type->fetchall();
    }


}