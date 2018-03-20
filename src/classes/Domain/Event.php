<?php
namespace classes\Domain;

class Event {
    
    public $id;
    
    public $date;
    
    public $name;
    
    public $description;
    
    
    public function __construct($id, $date, $name, $description) {
        
        $this->id = $id;
        
        $this->date = $date;
        
        $this->name = $name;
        
        $this->id = $description;
    }
}

