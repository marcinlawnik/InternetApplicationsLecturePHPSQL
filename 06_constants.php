<?php

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

define("GREETINGS", "Welcome to W3Schools.com!", true);
echo greetings;


//https://stackoverflow.com/questions/8481869/change-the-value-of-a-previously-defined-constant
define('TEST','foo',true);
var_dump(TEST);
define('TEST','bar');
var_dump(TEST);