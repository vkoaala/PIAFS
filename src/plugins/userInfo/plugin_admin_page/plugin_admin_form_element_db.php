<?php

//This class let you fetch stuff from the db
class form_element_db
{

    private $table;

    function __construct()
    {
        global $prefixeTable;

        $this->table = $prefixeTable . 'users_info';
        $this->form_element_table = $prefixeTable . 'form_element';
    }

    function makeArrayOfFormElements($queryResult){
        $form_elements = array();
        foreach($queryResult as $queryRow){
            $array_to_push = array();
            foreach($queryRow as $queryColumn){
                array_push($array_to_push, $queryColumn);
            }
            array_push($form_elements, $array_to_push);
        }
        return $form_elements;
    }

    function getAllFormElements(){
        $query = '
            SELECT * 
            FROM piwigo_form_element';
        return pwg_query($query);
    }

    function addFormElement($form_element_name, $form_element_type){
        $query = '
            INSERT INTO '. $this->form_element_table.'(form_element_name, form_element_type) 
            VALUES (\''.$form_element_name.'\', \''.$form_element_type.'\')
        ;';
        pwg_query($query);
    }

}

?>