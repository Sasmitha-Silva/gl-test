<?php

spl_autoload_register(function($classname){
    require $filename = "../app/models/".ucfirst($classname). ".php";
});
require 'config.php';
require 'functions.php';
require 'Controller.php';
require 'Database.php';
require 'Model.php';
require 'App.php';

