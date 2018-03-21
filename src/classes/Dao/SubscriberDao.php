<?php
namespace classes\Dao;

use classes\Dao\DaoBase;
use classes\Domain\Subscriber;

include 'DaoBase.php';

class SubscriberDao extends DaoBase {
    
    public function __construct() {
        
        parent::__construct();
    }
    
    public function addSubscriber($subscriber) {
        $query = $this->bdd->prepare("INSERT INTO subscribers (name, mail) VALUES (:name, :email)");
        
        $query->bindParam(":name", $subscriber->name);
        $query->bindParam(":email", $subscriber->email);
        
        $query->execute();
    }
    /*
    public function getAllMails() {
        
        $query = $this->bdd->query("SELECT mail FROM subscribers");
        
        $query->execute();
        
        $emails = $response->fetch();
        
        return $emails;
    }*/
}
