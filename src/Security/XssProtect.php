<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace CMS\Security;
/**
 * Description of XssProtect
 *
 * @author adrian
 */
class XssProtect {
    
    public function main($variable = null){
        
        if(is_array($variable)){
            
            foreach($variable as $key => $value){
            
                if(is_array($value)){
                
                    $variable[$key] = $this->main($values);
                
                } else {
                
                    $variable[$key] = $this->filter($value);
                        
                }
            }
            
        } else {
            
            $variable = $this->filter($variable);
            
        }
        
        return $variable;
        
    }
    
    public function filter($value = null) {
        
         // Fix &entity\n;
        $value = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $value);
        $value = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $value);
        $value = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $value);
        $value = html_entity_decode($value, ENT_COMPAT, 'UTF-8');
 
        // Remove any attribute starting with "on" or xmlns
        $value = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $value);
 
        // Remove javascript: and vbscript: protocols
        $value = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $value);
        $value = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $value);
        $value = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $value);
 
        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $value = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $value);
        $value = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $value);
        $value = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $value);
 
        // Remove namespaced elements (we do not need them)
        $value = preg_replace('#</*\w+:\w[^>]*+>#i', '', $value);
 
        do {
            // Remove really unwanted tags
            $old_data = $value;
            $value = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $value);
        }
        while ($old_data !== $value);
 
        // we are done...
        return $value;
        
    }
    
}
