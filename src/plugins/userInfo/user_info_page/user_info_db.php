<?php

//This class let you add stuff to the db
class user_info_db
{

    private $table;

    function __construct()
    {
        global $prefixeTable, $user;

        $this->table = $prefixeTable . 'users_info';
    }

    function userInfoExists($id){
        $query = '
            SELECT * 
            FROM '.$this->table.' 
            WHERE id = '. $id .'';
        $result = pwg_db_fetch_assoc(pwg_query($query));

        if(empty($result)){
            return false;
        }
        return true;
    }

    function getUserInfo($userId){
        $query = '
            SELECT * 
            FROM '. $this->table.'
            WHERE id = '. $userId;
        return pwg_db_fetch_assoc(pwg_query($query));
    }

    function insertInfo($id, $firstName, $lastName){
        $query = '
        INSERT INTO '. $this->table.'(id,firstName,lastName) 
        VALUES (\''.$id.'\', \''.$firstName.'\', \''.$lastName.'\')
        ;';
        pwg_query($query);
    }

    function modifyInfo($id, $firstName, $lastName){
        $query = '
            UPDATE '.$this->table.'
            SET firstName = "'.$firstName.'",
                lastName = "'.$lastName.'"
            WHERE id ='.$id.'
            ';
        pwg_query($query);
    }

}

?>