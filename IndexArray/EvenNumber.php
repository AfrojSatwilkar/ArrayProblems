<?php
        
    $numbers = array( 1, 2, 3, 4, 5, 6, 43, 82, 45, 86);
    $evenNumber = array();
         
    foreach( $numbers as $value ) {
        if ($value % 2 == 0) {
            array_push($evenNumber,$value);
        }
    }

    echo "Even Numbers : ";
    for ($i = 0; $i < count($evenNumber); $i++) {
        echo $evenNumber[$i] . " ";
    } 
?>