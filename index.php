<?php
//this is my controller
//sessions sends "headers already sent" error when ANY white space is on front
//  of your <?php

//turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

//start a session
//session_start();

//require autoload file
require_once('vendor/autoload.php');

//instantiate F# base class
$f3 = Base::instance();


//define a default route (328/diner)
/*function(){
    $msg = "This is a function";
    echo $msg;
}*/
$f3->route('GET /', function(){
    $view = new Template();
    echo $view->render("views/info.html");
});

//if the form has been submitted

//Run Fat Free
$f3->run();

