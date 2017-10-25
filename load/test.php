<?php
function __autoload($className)
{
    include_once("../bean/" . $className . ".php");
}

$p = new Person(1, "jack", 34);
$t = new Teacher(11, "tom", 14);

echo $p->age;