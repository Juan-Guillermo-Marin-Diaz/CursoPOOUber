<?php

require_once('payment.php');
class Card extends Payment{
    public $numberCard;
    public $dateCard;
    public $cvv;

    public function __construct($id, $numberCard, $dateCard, $cvv){
        parent::__construct($id);
        $this->numberCard = $numberCard;
        $this->dateCard = $dateCard;
        $this->cvv = $cvv;
    }
}
?>