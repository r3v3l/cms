<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace CMS\Views;
/**
 * Description of SimpleView
 *
 * @author adrian
 */
class SimpleView {
    
    /**
     * holds variables assigned to template
     * @var array $data 
     */
    private $data = array();
    
    /**
     * holds render status of view
     * @var multitype $render 
     */
    private $render = FALSE;
    
    /**
     * constructor
     * accept a template to load
     * @param string $template 
     */
    public function __construct($template) {
        /**
         * trigger render to include file when this model is destroyed
         * if we render it now, we wouldn't be abble to assign variables
         * to the view!
        */
        $this->render = $template;
    }
    
    /**
     * 
     * @param multitype $variable
     * @param multitype $value
     */
    public function assign($variable = null, $value = null){
        $this->data[$variable] = $value;
    }
    
    /**
     * destructor
     */
    public function __destruct() {
        /**
         * parse data variables into local variables, so that they render to the view
         */
        $data = $this->data;
        /**
         * render view
         */
        if(file_exists($this->render)){
            include $this->render;
        }
    }
    
}
