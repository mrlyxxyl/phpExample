<?php
include_once "../bean/Person.php";

$p = new Person(1, "jack", 34);

echo json_encode($p);

$jsonStr = '{"id": 1,"name": "jack","age": 34}';
$jsonObj = json_decode($jsonStr);
echo "<br/>";
echo $jsonObj->id;
echo "<br/>";
echo $jsonObj->name;
echo "<br/>";
echo $jsonObj->age;
