<?php
class statusModel extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function getStatus()
    {
        $status = $this->_db->query("select * from my_status");
        return $status->fetchall();
    }


}
?>