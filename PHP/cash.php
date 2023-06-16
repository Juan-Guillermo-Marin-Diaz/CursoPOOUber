<?php

require_once('payment.php');
class cash extends Payment{
    public function __construct($id){
        parent::__construct($id);
    }
}
?>