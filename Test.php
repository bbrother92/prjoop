<?php

spl_autoload_register(function($className) {
    include_once $className . '.php';
});
error_reporting(E_ALL);
//$arr = array("one", "two");
//foreach ($arr as $v) {
//    echo $v;
//}
print("<br><hr>");
$prn0 = new Employee();
echo $prn0;
$prn = new Employee("JACK");
$prn2 = new Employee("Bob");
$prn->setSalary(11000);
$prn2->setSalary(22333);
$prn->department = "new dep";
$prn2->department = "bookkeeping dep";
echo $prn;
echo $prn2;

