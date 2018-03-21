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

$subscriber = new Subscriber(null, 'Lala', 'du31', 'Lala@du31.com', '1993-03-11');

$subscriberDao = new SubscriberDao();

$subscriberDao->addSubscriber($subscriber);

print_r($subscriber);