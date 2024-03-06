<?php
//creating static kwyword variables
function muNumber(){
    static $qty = 0;
    echo $qty."</br>";
    $qty=2;
    // $qty+=1;
}
muNumber();
muNumber();

?>