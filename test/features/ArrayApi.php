<?php
use test\ArrayApi;
$a = count(array(1));
$b = array(1, "a");
$c = count($b);
array_push($b, $c);
$d = array_search(1, $b);
$f = array_map(function ($value, $index) {
    return $value + 1;
}, $b);
$e = array_walk($b, function ($value, $index) {
    $a = $value + 1;
});
$g = array_filter($b, function ($value, $index) {
    return $value;
});
$t = Ts2Php_Helper::isPlainArray($a);
function process($x) {
    Ts2Php_Helper::arraySlice($x["y"], 1);
    array_push($x["y"], 1);
}
