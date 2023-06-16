<?php
require_once("Car.php");
require_once("UberX.php");
require_once("UberPool.php");
require_once("Account.php");
require_once("payment.php");
require_once("card.php");
require_once("cash.php");
require_once("paypal.php");

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
$uberPool->printDataCar();

$payment = new Payment("PAYMENT");
$payment->printDataPayment();

$card = new Card("CARD", "8903XXXXXXX", "321", "12/26");
$card->printDataPayment();

$cash = new Cash("CASH");
$cash->printDataPayment();

$paypal = new Paypal("PAYPAL", "myemail@gmail.com", "321", "12/26");
$paypal->printDataPayment();
?>