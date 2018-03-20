<?php

namespace classes\Domain;


class Subscriber {
    
    public $id;
    
    public $name;
    
    public $firstName;
    
    public $email;
    
    public $birthdate;
    
    
    public function __construct($id, $name, $firstName, $mail, $birthdate) {
        
        $this->id = $id;
        
        $this->name = $name;
        
        $this->firstName = $firstName;
        
        $this->email = $email;
        
        $this->birthdate = $birthdate;
    }
}

