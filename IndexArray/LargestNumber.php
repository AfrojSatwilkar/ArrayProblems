<?php
$numbers = array(4,54,747,2,8,3,4,947,7,2,5,62,51,54,84,12,45,15,8,2,12,5);
$largestNumber = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > $largestNumber) {
        $largestNumber = $numbers[$i];
    }
}

echo "Largest number : " . $largestNumber;
?>