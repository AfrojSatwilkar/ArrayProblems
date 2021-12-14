<?php
$name = array("Rahul" => "male", "Snehal" => "female", "Afroj" => "male", "Priyanka" => "female", "Prafulla" => "male", "Zaheer" => "male");

foreach ($name as $fName => $gender) {
    if ($gender == "male") {
        echo "Mr. " . $fName . "\n";
    }elseif($gender == "female") {
        echo "Miss. " .$fName . "\n";
    }
}
?>