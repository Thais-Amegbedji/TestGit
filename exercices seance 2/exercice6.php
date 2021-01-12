<?php
$mois=rand(1,12);
$annee=rand(1900,2100);
if ($mois==1 || $mois==3 || $mois==5 || $mois==7 || $mois==8 || $mois==10 || $mois==12){
    echo "mois=$mois    annee=$annee   nbreJours=31";
}
if ($mois==4 || $mois==6 || $mois==9 || $mois==11){
    echo "mois=$mois    annee=$annee   nbreJours=30";
}
if($mois==2){
    if($annee%4==0){
        echo "mois=$mois    annee=$annee   nbreJours=29";
    }
    else{
        echo "mois=$mois    annee=$annee   nbreJours=28";
    }
}
?>