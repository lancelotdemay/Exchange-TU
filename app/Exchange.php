<?php

namespace App;

class Exchange {

    private $emailSender;
    private $dbConnection;
    
    public function __construct($receiver, $product, $owner, $begin_date, $end_date) {
        $this->receiver = $receiver;
        $this->product = $product;
        $this->owner = $owner;
        $this->begin_date = $begin_date;
        $this->end_date = $end_date;
    }
    
}

?>