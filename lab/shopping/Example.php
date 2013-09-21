<?php 
require_once './Item.php';
require_once './Order.php';

$ipad = new Item();
$ipad->setDescription('Ipad mini');
$ipad->setPrice(100);

$cover = new Item();
$cover->setDescription('Ipad mini cover');
$cover->setPrice(20);

$laptop = new Item();
$laptop->setDescription('Cool laptop');
$laptop->setPrice(10000);

$order = new Order();
$order->addItems($ipad, 2);
$order->addItems($laptop);
$order->addItems($cover, 3);

echo $order->getSummary(); 
