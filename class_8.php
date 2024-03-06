<?php
$person_name = "Pritom";//global varibale
$person_email = "pritom.cse.29@"; //global variable

function personDetails(){
    $person_name = "pritom"; // function er moddhe je varibale thake ta local varibale
    echo $person_name;
}
personDetails();

?>