<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace CMS\Controllers;
/**
 * Description of NewsletterController
 *
 * @author adrian
 */
class NewsletterController {
    
    public static function createNewsletterEmail($values = null){
        
        $newsletter = new \CMS\Models\NewsletterModel();
        $result = $newsletter->insertNewsletterEmail(['post']);
        if($result){
            
        }else {
            
        }
        
    }
    
}
