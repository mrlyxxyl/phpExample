<?php

class DBUtil
{
    var $host;
    var $port;
    var $dbName;
    var $user;
    var $password;
    var $conn;
    var $dbPools = array();

    public function __construct($host, $port, $dbName, $user, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
    }

    function conn()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbName, $this->port) or die('Could not connect: ' . mysqli_error());;
    }

    function closeConn()
    {
        mysqli_close($this->conn);
    }

    function query($sql)
    {
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}

