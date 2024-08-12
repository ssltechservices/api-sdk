<?php

require 'vendor/autoload.php';

use Secretel\ApiSdk\SecretelApi;
use Secretel\ApiSdk\Objects\HondaLeadAutos;
use Secretel\ApiSdk\Exceptions\SecretelException;

$secretelapi = new SecretelApi($apiUsername, $apiPassword);

try {
    //Autenticar con las credenciales para obtener el token
    $secretelapi->authenticate();

    //Iniciar la clase HondaLead (Con los campos mínimos obligatorios)
    $hondaLeadAutosObject = new HondaLeadAutos();
    $hondaLeadAutosObject->setFirstname("angel");
    $hondaLeadAutosObject->setLastname("manso");
    $hondaLeadAutosObject->setPhone("34621374852");
    $hondaLeadAutosObject->setContactdatetime(new \DateTime());

    //Iniciar la acción
    $action = $secretelapi->CreateHondaLeadAutosAction();
    $action->post($hondaLeadAutosObject);

    //si el objeto se devuelve correctamente, se recibe un array con clave id (es el identificador de secretel)
    $createdObject = $action->getResponse();

    //TODO - Manejar eventos post-creación de lead
} catch (SecretelException $ex) {
    echo $ex->getMessage();
}

