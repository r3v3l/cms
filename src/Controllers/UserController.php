<?php

/**
 * SilenceOntheWire
 * ul. Chorzowska 6
 * 40-101 Katowice
 * All rights reserved.
 */

namespace CMS\Controllers;

/**
 * @filename UserController
 * @author Adrian Stolarski
 * 2016-07-07
 */
class UserController {
    
    public function signIn($variables = null){
        
        $view = new \CMS\Views\SimpleView("./templates/portoadmin/views/user/signIn.php");
        
    }
    
    public function logIn($variables = null){
        
    }
    
    public function signUp($variables = null){
        
        $view = new \CMS\Views\SimpleView("./templates/portoadmin/views/user/signUp.php");
        
    }
    
    public function create($variables = null){
        
    }
    
    public function forgot($variables = null){
        
        $view = new \CMS\Views\SimpleView("./templates/portoadmin/views/user/forgot.php");
        
    }
    
    public function remind($variables = null){
        
    }
    
    public function logOut($variabls = null){
        
    }
    
}
