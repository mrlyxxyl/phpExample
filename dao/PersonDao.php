<?php

include_once "../db/DBUtil.php";
include_once "../config/Config.php";
include_once "../bean/Person.php";

class PersonDao
{

    function getPersons($page, $pageSize)
    {
        $dbUtil = new DBUtil(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASSWORD);
        $dbUtil->conn();
        $sql = "select * from person limit " . (($page - 1) * $pageSize) . "," . $pageSize;
        $result = $dbUtil->query($sql);
        $persons = array();
        while ($row = mysqli_fetch_array($result)) {
            $p = new Person($row[0], $row[1]);
            array_push($persons, $p);
        }
        $dbUtil->closeConn();
        return json_encode($persons);
    }

    function getPersonById($id)
    {
        $dbUtil = new DBUtil(DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASSWORD);
        $dbUtil->conn();
        $sql = "select * from person where id = " . $id;
        $result = $dbUtil->query($sql);
        $row = mysqli_fetch_array($result);
        $p = new Person($row[0], $row[1]);
        $dbUtil->closeConn();
        return json_encode($p);
    }
}