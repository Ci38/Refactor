<?php
namespace activerecord;

abstract class collection {

    public static function create() {
        $model = new static::$modelName;
        return $model;
    }

    public static function findAll() {
        $db = dbconn::getConnection();
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $class = static::$modelName;
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        $result = $stmt->fetchAll();
        return $result;
    }

    public static function findOne($id) {
        $db = dbconn::getConnection();
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE id =' . $id;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $class = static::$modelName;
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        $result = $stmt->fetchAll();
        return $result;
    }
}
?>