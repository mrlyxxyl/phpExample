<?php

include_once "../dao/PersonDao.php";

class PersonService
{
    function getPersons()
    {
        $personDao = new PersonDao();
        return $personDao->getPersons(1, 10);
    }

    function getPersonById($id)
    {
        $personDao = new PersonDao();
        return $personDao->getPersonById($id);
    }
}