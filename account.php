<?php
interface model
{
    public function save();
    public function delete();
}

final class account extends activerecord\model {

    public $email = 'email';
    public $fname = 'fname';
    public $lname = 'lname';
    public $phone = 'phone';
    public $birthday = 'birthday';
    public $gender = 'gender';
    public $password = 'password';

    
    protected static $dataToInsert = array('b@test.com','blair','waldorf','81388','23-01-2017','female','test');

    public static $tableName = 'accounts';

    public static $columnToUpdate='lname';

    protected static $updateData = 'woodsen';

    public static $idOfCol = '9';
}
?>