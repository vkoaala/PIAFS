<?php

//This class let you fetch stuff from the db
class user_info_db
{

    private $table;

    function __construct()
    {
        global $prefixeTable;

        $this->table = $prefixeTable . 'users_info';
    }

    function getUsersInfo(){

        $query = '
            SELECT * 
            FROM '.$this->table;
        return pwg_query($query);

    }

}

?>