<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require auto load file
require_once("vendor/autoload.php");

//instantiate f3 base class (create an instance of the base class)
$f3 = Base::instance();

//define a default root (what the user sees when they go to index page)
$f3->route('GET /', function() {
    //echo "<h1>Hello</h1>";
    $view = new Template();
    echo $view->render('views/info.html');

});

//run fat free
$f3->run();
