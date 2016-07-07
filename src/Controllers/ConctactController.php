<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CMS\Controllers;

/**
 * Description of ConctactController
 *
 * @author adrian
 */
class ConctactController {
    
    public function createContact($values = null){
        
        $contactModel = new \CMS\Models\ContactModel();
        $result = $contactModel->insertContact($values['post']);
        if($result){
            
        }else {
            
        }
        
    }
    
}
