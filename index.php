<?php
//this is my controller

//turn on error reporting
ini_set("display_errors", 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//instantiate F# base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function($f3){
    //add food and color
    $f3->set('food', 'pizza');
    $f3->set('color', 'blue');
    $f3->set('temp', 67);
    $f3->set('radius', 10);

    //encrypts the password
    //$f3->set('password', sha1('pizza'));

    //define an array of fruits
    $fruits = array('apple', 'grapes', 'orange');
    $f3->set('fruits', $fruits);
    //$f3->set('fruits', array('apples', 'oranges'))

    $f3->set('colors', array('red', 'orange', 'blue'));

    $view = new Template();
    echo $view->render("views/info.html");
});

//Run Fat Free
$f3->run();

