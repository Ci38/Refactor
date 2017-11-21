<?php
//interface model
//{
  //  public function save();
    //public function delete();
//}
final class todo extends activerecord\model {

    public $owneremail = 'owneremail';
    public $ownerid = 'ownerid';
    public $createddate = 'createddate';
    public $duedate = 'duedate';
    public $message = 'message';
    public $isdone = 'isdone';

    protected static $dataToInsert = array('ol@g.com','4','11/1/2017','2/1/2017','ccde','10');

    public static $tableName = 'todos';

    public static $columnToUpdate='message';

    public static $updateData = 'code';

    public static $idOfCol = '5';
}
?>