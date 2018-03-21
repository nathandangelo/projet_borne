<?php
/*
use Dao\SubscriberDao;
use Domain\Subscriber;
include 'autoload.php';
*/
use classes\Domain\Subscriber;
use classes\Dao\SubscriberDao;

include "src/classes/Domain/Subscriber.php";
include "src/classes/Dao/SubscriberDao.php";

$subscriber = new Subscriber(null, 'Hector', 'Totor@machin.com');

$subscriberDao = new SubscriberDao();

$subscriberDao->addSubscriber($subscriber);

print_r($subscriber);