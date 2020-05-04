<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require auto load file
require_once("vendor/autoload.php");

//instantiate f3 base class (create an instance of the base class)
$f3 = Base::instance();

//define a default root (what the user sees when they go to index page)
$f3->route('GET /', function($f3) {
    //echo "<h1>Hello</h1>";

    //create some variables in the F3 HIVE
    $f3->set('username', 'zfrehner');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with templates');

    $f3->set('color', 'purple');
    $f3->set('radius', 5);

    //define array
    $f3->set('fruits', array('apple', 'orange', 'banana'));

    $f3->set('bookmarks', array('https://greenriver.edu', 'https://foxnews.com', 'https://www.apple.com'));

    $f3->set('desserts', array('chocolate'=>"Chocolate Mousse", 'vanilla'=>"Vanilla Ice Cream", 'strawberry'=>"Strawberry Stuff"));





    $view = new Template();
    echo $view->render('views/info.html');

});

//run fat free
$f3->run();
