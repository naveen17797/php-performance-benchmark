<?php
echo memory_get_usage(true) ."\n";
require_once "class_constant.php";
$f1 = new Foo();
$f2 = new Foo();
$f3 = new Foo();
echo memory_get_usage(true) ."\n";



