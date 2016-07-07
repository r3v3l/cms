<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CMS\Models;

/**
 * Description of NewsletterModel
 *
 * @author adrian
 */
class NewsletterModel {
    
    public function insertNewsletterEmail($values = null){
        
        $db = new \DB();
        $insert = $db->query(
                "INSERT INTO `newsletter`(`email`) values(:email)", 
                array('email' => $values['email'])
                );
        if($insert > 0){
            
            return true;
            
        }
        
        return false;
        
    }
    
}
