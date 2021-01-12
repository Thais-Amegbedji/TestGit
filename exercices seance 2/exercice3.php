<?php
$a=rand(-25,25);
$b=rand(-25,25);
$c=rand(-25,25);
if($a>$b && $b>$c){
    echo "lordre decroissant est  $a, $b, $c"; 
}
if($c>$b && $b>$a){
    echo "lordre decroissant est $c, $b, $a";
}
if($c>$a && $a>$b){
    echo "lordre decroissant est $c, $a, $b";
}
if($b>$c && $c>$a){
    echo "lordre decroissant est $b, $c, $a";
}
if($a>$c && $c>$b){
    echo "lordre decroissant est $a, $c, $b";
}
if($b>$a && $a>$c){
    echo "lordre decroissant est $b, $a, $c";
}
?>