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

    function userInfoExists($id){
        $query = '
            SELECT * 
            FROM piwigo_users_info 
            WHERE id = '. $id .'';
        $result = pwg_db_fetch_assoc(pwg_query($query));

        if(empty($result)){
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

    function modifyInfo($id, $firstName, $lastName){
        $query = '
            UPDATE piwigo_users_info
            SET firstName = "'.$firstName.'",
                lastName = "'.$lastName.'"
            WHERE id ='.$id.'
            ';
        pwg_query($query);
    }

}

?>