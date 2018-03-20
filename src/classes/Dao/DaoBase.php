<?php

namespace Dao;


class DaoBase {
    
    protected $bdd;
    
    public function __construct($config) {
        
        $this->bdd = new \PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'].";charset=utf8",
            $config['user'],
            $config['password']);
        
    }
}
