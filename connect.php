<?php
$hote="localhost";
$utilisateur="root";
$mpasse="";
$nombase="catalogue";
$con=mysqli_connect($hote, $utilisateur, $mpasse, $nombase) 
or die ("connexion impossible");
?>