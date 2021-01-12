<?php
$annee=rand(1900,2100);
$bisextile=false;
echo "lannee est $annee"; echo "<br>";
if($annee%4==0){
    $bisextile=true;
    echo "$annee est bisextile"; echo "<br>";
}
else {
    $bisextile=false;
    echo "$annee nest pas bisextile"; echo "<br>";
}
?>