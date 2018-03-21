<?php

namespace classes\Dao;

use classes\Dao\DaoBase;

class EventDao extends DaoBase {
    
    public function addEvent($event) {
        
        $query = $this->bdd->prepare("INSERT INTO events (name, date, description) VALUES (:name, :date, description)");
        
        $query->bindParam(":name", $event->name);
        $query->bindParam(":date", $event->date);
        $query->bindParam(":description", $event->description);
        
        $pk = $this->bdd->lastInsertId();
        $contact->pk = $pk;
        
        return $pk;
        
        $query->execute();
    }
}
