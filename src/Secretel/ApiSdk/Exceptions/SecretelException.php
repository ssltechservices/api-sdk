<?php

namespace Secretel\ApiSdk\Exceptions;

use Exception;

class SecretelException extends Exception {

    public $exDetails;

    public function __construct($ex) {
        parent::__construct();
        $this->exDetails = $ex;

        $this->message = $ex['title'] . ': ' . $ex['detail'];
        if (!empty($ex['violations'])) {
            $this->message .= '<ul>';
            foreach ($ex['violations'] as $violation) {
                $this->message .= '<li>'.$violation['propertyPath'].': '.$violation['message'].'</li>';
            }
            $this->message .= '</ul>';
        }
    }

}
