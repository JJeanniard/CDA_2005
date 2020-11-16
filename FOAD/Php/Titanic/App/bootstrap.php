<?php

require ("./Router.php");

require (__DIR__.'/Models/DbConnect.php');
require (__DIR__.'/Models/User.php');
require (__DIR__.'/Models/Users.php');

$router = new Router("/users_simple/");