<?php

class Model_Main extends Db
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

        $tmp = $obj->Select("*", "customers");

        return $tmp;
    }
}