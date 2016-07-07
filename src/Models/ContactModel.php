<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CMS\Models;

/**
 * Description of ContactModel
 *
 * @author adrian
 */
class ContactModel {
    
    public function insertContact($values = null){
        
        $db = new \DB();
        $insert = $db->query(
                "INSERT INTO contact(username, email, subject, message) "
                . "values(:username, :email, :subject, :message);", array(
                    "email" => $values['email'],
                    "username" => $values['username'],
                    "subject" => $values['subject'],
                    "message" => $values['message']
                )
                );
        
        if($insert > 0){
            
            return true;
            
        }else {
            
            return false;
            
        }
        
    }
    
}
