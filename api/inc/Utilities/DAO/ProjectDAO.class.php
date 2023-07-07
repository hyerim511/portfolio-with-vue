<?php

class ProjectDAO {

    private static $db;

    public static function startDb() {
        self::$db = new PDOService('Project');
    }

    public static function getAllProject() {
        $sql = "SELECT * FROM project";
  
        self::$db->query($sql);
        self::$db->execute();
  
        return self::$db->resultSet();
    }

}