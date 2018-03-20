<?php

namespace classes\Dao;

use Dao\DaoBase;

class SubscriberDao extends DaoBase {
    
    public function addSubscriber($subscriber) {

        $query = $this->bdd->prepare("INSERT INTO subscribers (id, name, lastname, mail, birthdate) VALUES (:name, :lastName, :email, :birthdate)");
        
        $query->bindParam(":name", $name);
        $query->bindParam(":lastname", $lastName);
        $query->bindParam(":mail", $email);
        $query->bindParam(":birthdate", $birthdate);
        
        $pk = $this->bdd->lastInsertId();
        $contact->pk = $pk;
        
        return $pk;
        
        $query->execute();
    }
}

