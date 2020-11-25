<?php

class Model_Salespeople extends Db
{

    public function get_date()
    {
        $obj = new DB();
        $obj->ConnectToDb();
    }

    static function vir()
    {
        $obj = new DB();
        $obj->ConnectToDb();

        $tmp = $obj->Select("*", "salespeople");

        return $tmp;
    }
}