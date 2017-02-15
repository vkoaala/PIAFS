<?php

//This class let you add stuff to the db
class user_info_db
{

    function __construct()
    {

    }

    function insertInto($id, $firstName, $lastName){
        $query = '
        INSERT INTO piwigo_users_info(id,firstName,lastName) 
        VALUES (\''.$id.'\', \''.$firstName.'\', \''.$lastName.'\')
        ;';
        pwg_query($query);
    }

}

?>