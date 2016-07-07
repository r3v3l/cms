<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace CMS\Configs;
/**
 * Description of Database
 *
 * @author adrian
 */
class Database {
    
    public function dbConfig(){
        
        return array(
            'dbname' => 'blog',
            'host' => 'localhost',
            'user' => 'root',
            'password' => 'r3v3l@t104'
        );
        
    }
    
}
