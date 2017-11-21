<?php
namespace activerecord;
abstract class model{

    public static $colstring;
    public static $valuestring;
    public static $id;

    public function save() {

        if (static::$idOfCol == '')
        {
            $array = get_object_vars($this);
            self::$colstring = implode(', ', $array);
            self::$valuestring = implode(', ', array_fill(0, count($array), '?'));
            $sql = $this->insert();
            $db = dbconn::getConnection();
            $statement = $db->prepare($sql);
            $statement->execute(static::$dataToInsert);
        }
        else
        {
            $sql = $this->update();
            $db = dbconn::getConnection();
            $statement = $db->prepare($sql);
            $statement->execute();
            return $sql;
            echo '<br>';
        }
    }

    public function insert()
    {
        $sql = "INSERT INTO ".static::$tableName." (".self::$colstring.") VALUES (".self::$valuestring.")";
        return $sql;
    }

    public function update() {

        $sql = "UPDATE ".static::$tableName." SET ".static::$columnToUpdate." = '".static::$updateData."' WHERE id=".static::$idOfCol;
        return $sql;
    }

    public function delete() {

        $db = dbconn::getConnection();
        $sql = "DELETE from ".static::$tableName." WHERE id=".static::$idOfCol;
        $statement = $db->prepare($sql);
        $statement->execute();
    }
}
?>