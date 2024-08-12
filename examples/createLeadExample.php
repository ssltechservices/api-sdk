<?php

require 'vendor/autoload.php';

use Secretel\ApiSdk\SecretelApi;
use Secretel\ApiSdk\Objects\HondaLead;
use Secretel\ApiSdk\Exceptions\SecretelException;

$secretelapi = new SecretelApi($apiUsername, $apiPassword);

try {
    //Autenticar con las credenciales para obtener el token
    $secretelapi->authenticate();

    //Iniciar la clase HondaLead (Con los campos mínimos obligatorios)
    $hondaLeadObject = new HondaLead();
    $hondaLeadObject->setFirstname("angel");
    $hondaLeadObject->setLastname("manso");
    $hondaLeadObject->setPhone("34621374852");
    $hondaLeadObject->setContactdatetime(new \DateTime());

    //Iniciar la acción
    $action = $secretelapi->CreateHondaLeadAction();
    $action->post($hondaLeadObject);

    //si el objeto se devuelve correctamente, se recibe un array con clave id (es el identificador de secretel)
    $createdObject = $action->getResponse();

    //TODO - Manejar eventos post-creación de lead
} catch (SecretelException $ex) {
    echo $ex->getMessage();
}

