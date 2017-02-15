<?php

//This class let you add stuff to the db
class user_info_db
{

    function __construct()
    {

    }

    function areValid($toValidate){
        foreach($toValidate as $item){
            if(!$this->isValid($item)){
                return false;
            }
        }
        return true;
    }

    function isValid($toValidate){
        if(!isset($toValidate)){
            return false;
        }
        if(empty($toValidate)){
            return false;
        }
        return true;
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