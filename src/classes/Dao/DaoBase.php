<?php

namespace classes\Dao;

class DaoBase {
    
    public $bdd;
    
    public $config = array(
        
        'host' => 'localhost',
        'dbname' => 'Borne',
        'user' => 'borne',
        'password' => 'root'
    );
    
    public function __construct() {
        
        $this->bdd = new \PDO("mysql:host=".$this->config['host'].";dbname=".$this->config['dbname'].";charset=utf8",
            $this->config['user'],
            $this->config['password']);    
    }
}