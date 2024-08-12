<?php

namespace Secretel\ApiSdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Secretel\ApiSdk\Actions\HondaLeadAction;
use Secretel\ApiSdk\Actions\HondaLeadAutosAction;

class SecretelApi {
    private $client;
    private $username;
    private $password;
    private $token;

    public function __construct(string $username, string $password) {
        $this->username = $username;
        $this->password = $password;
        $this->client = new Client([
            'base_uri' => 'https://api.secretel.es/',
            'timeout'  => 5.0,
        ]);
    }
    
    public function getToken() {
        return $this->token;
    }

    public function authenticate() {
        try {
            $body = json_encode([
                'user' => $this->username,
                'password' => $this->password,
            ]);

            $response = $this->client->post('authentication_token', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'body' => $body,
            ]);

            $data = json_decode($response->getBody(), true);
            $this->token = $data['token'];

            return $this->token;

        } catch (RequestException $e) {
            // Manejar errores de la solicitud
            if ($e->hasResponse()) {
                $error = json_decode($e->getResponse(), true);
                throw new \Exception('Error de autenticación: ' . $error['message']);
            } else {
                throw new \Exception('Error de autenticación: ' . $e->getMessage());
            }
        }
    }
    
    public function CreateHondaLeadAction() {
        $this->CheckToken(__CLASS__, __METHOD__, __FUNCTION__);
        $hondaleadaction = new HondaLeadAction($this->token, $this->client);
        return $hondaleadaction;
    }
    
    public function CreateHondaLeadAutosAction() {
        $this->CheckToken(__CLASS__, __METHOD__, __FUNCTION__);
        $hondaleadautosaction = new HondaLeadAutosAction($this->token, $this->client);
        return $hondaleadautosaction;
    }
    
    public function CheckToken($c, $m, $f) {
        if($this->token == "") {
            throw new \Exception("$c / $m [$f] Token not found. Please authenticate first.", 105);
        }
    }
}
