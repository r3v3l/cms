<?php
require __DIR__.'/vendor/autoload.php';
use CMS\Security\XssProtect;

$xssProtect = new XssProtect();
$post = array($xssProtect->main($_POST));
$get = array($xssProtect->main($_GET));

$values = array();
$values['post'] = $post;
$values['get'] = $get;

$app = new \Slim\App();
$app->get("/", function(){
    
    print_r("Hello world");
    
});
$app->run();