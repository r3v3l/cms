<?php
require __DIR__.'/vendor/autoload.php';
use CMS\Security\XssProtect;

$xssProtect = new XssProtect();
$post = array($xssProtect->main($_POST));
$get = array($xssProtect->main($_GET));

$variables = array();
$variables['post'] = $post;
$variables['get'] = $get;

$app = new \Silex\Application();
$app->get("/logowanie.html", function(){
    $userController = new CMS\Controllers\UserController;
    $userController->signIn();
});
$app->get("/rejestracja-konta.html", function(){
    $userController = new CMS\Controllers\UserController;
    $userController->signUp();
});
$app->get("/przypomnienie-hasla.html", function(){
    $userController = new CMS\Controllers\UserController;
    $userController->forgot();
});
$app->run();