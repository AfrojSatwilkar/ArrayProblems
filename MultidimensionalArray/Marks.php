<?php
$marks = array(
    "Kevin" => array (
        "physics" => 95,
        "maths" => 90,
    ),
    "Yadu" => array (
        "physics" => 92,
        "maths" => 97,
    ),
    "Afroj" => array (
        "physics" => 97,
        "maths" => 98,
    ),
    "Prafulla" => array (
        "physics" => 94,
        "maths" => 91,
    ),
);

echo "Marks for Kevin in physics : " . $marks['Kevin']['physics'] . "\n";
echo "Marks for Afroj in maths : " . $marks['Afroj']['maths'] . "\n";
?>