<?php

include_once 'src/plugins/userInfo/template/user_info_db.php';

class UserInfoDbTest extends PHPUnit_Framework_TestCase
{

    protected $user_info_db;

    protected function setUp()
    {
        $this->user_info_db = new user_info_db();
    }

    public function testIsValidReturnFalseIfVariableNotSet()
    {
        $variable = null;

        $actualResult = $this->user_info_db->isValid($variable);

        $this->assertFalse($actualResult);
    }

    public function testIsValidReturnFalseIfVariableIsEmpty()
    {
        $variable = "";

        $actualResult = $this->user_info_db->isValid($variable);

        $this->assertFalse($actualResult);
    }

    public function testIsValidReturnTrueIfVariableIsValid()
    {
        $variable = "Bob";

        $actualResult = $this->user_info_db->isValid($variable);

        $this->assertTrue($actualResult);
    }

    public function testAreValidReturnFalseIfAVariableIsEmpty()
    {
        $variableArray = array("", "bob", "roger");

        $actualResult = $this->user_info_db->areValid($variableArray);

        $this->assertFalse($actualResult);
    }

    public function testAreValidReturnTrueIfAllVariablesAreValid()
    {
        $variableArray = array("sylvain", "bob", "roger");

        $actualResult = $this->user_info_db->areValid($variableArray);

        $this->assertTrue($actualResult);
    }

    public function testAreValidReturnFalseIfAVariableIsNotSet()
    {
        $variableArray = array(null, "bob", "roger");

        $actualResult = $this->user_info_db->areValid($variableArray);

        $this->assertFalse($actualResult);
    }

    public function testAreValidReturnFalseIfMultipleVariablesAreNotSet()
    {
        $variableArray = array(null, "bob", null);

        $actualResult = $this->user_info_db->areValid($variableArray);

        $this->assertFalse($actualResult);
    }

}
?>
