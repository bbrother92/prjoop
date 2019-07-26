<?php

spl_autoload_register(function($className) {
    include_once $className . '.php';
});
error_reporting(E_ALL);
//$arr = array("one", "two");
//foreach ($arr as $v) {
//    echo $v;
//}
//print("<br><hr>");
//$prn0 = new Employee();
//echo $prn0;
//$prn = new Employee("JACK");
//$prn2 = new Employee("Bob");
//$prn->setSalary(11000);
//$prn2->setSalary(22333);
//$prn->department = "new dep";
//$prn2->department = "bookkeeping dep";
//echo $prn;
//echo $prn2;

/*class A {
    public $x;

    function example() {
        $this->x= "foo";
        echo  "I am A::example() and provide basic functionality.<br />\n";
    }
}

class B extends A {
    function example() {
        echo "I am B::example() and provide additional functionality.<br />\n";
        parent::example();
    }
}

$b = new B;

// This will call B::example(), which will in turn call A::example().
$b->example();
echo $b->x;*/

$ar = "super long that";

$ss = list($a , $b, $c) = explode(" ",$ar );
var_dump($a);


