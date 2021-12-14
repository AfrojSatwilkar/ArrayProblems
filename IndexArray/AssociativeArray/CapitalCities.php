<?php
$country = array("USA" => "WASHINGTON DC", "NORWAY" => "OSLO", "ENGLAND" => "LONDON", "GERMANY" => "BERLIN");

foreach ($country as $country => $capitalCities){
    echo "Country = " . $country . ", Capital City = " . $capitalCities . "\n";
}
?>