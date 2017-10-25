<?php
include_once "../service/PersonService.php";

$personService = new PersonService();

$method = $_GET["method"];
if ($method == 'getPersons') {
    echo $personService->getPersons();
} elseif ($method == 'getPersonById') {
    $id = $_GET["id"];
    echo $personService->getPersonById($id);
}
