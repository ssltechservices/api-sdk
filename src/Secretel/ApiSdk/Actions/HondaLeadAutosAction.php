<?php

namespace Secretel\ApiSdk\Actions;

use Secretel\ApiSdk\Objects\HondaLeadAutos;
use Secretel\ApiSdk\Exceptions\SecretelException;
use GuzzleHttp\Exception\RequestException;

class HondaLeadAutosAction {

    public $response;
    private $token;
    private $client;

    public function __construct($token, $client) {
        $this->token = $token;
        $this->client = $client;
    }

    public function post(HondaLeadAutos $hondaLeadAutos) {
        $clearObj = array();
        foreach (get_object_vars($hondaLeadAutos) as $k => $v) {
            if ($v != "") {
                if ($v instanceof \DateTime) {
                    $clearObj[$k] = $v->format('Y-m-d\TH:i:sP');
                } else {
                    $clearObj[$k] = $v;
                }
            }
        }
        
        try {
            $response = $this->client->post('api/honda/leads/createLeadAutos', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->token,
                ],
                'body' => json_encode($clearObj),
            ]);

            $data = json_decode($response->getBody(), true);
            $this->response = $data;

            return $this->response;
        } catch (RequestException $e) {
            $ex = json_decode($e->getResponse()->getBody()->getContents(), $e->getCode());
            throw new SecretelException($ex);
        }
    }

    public function getResponse() {
        return $this->response;
    }

}
