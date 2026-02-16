<?php
$data = file_get_contents("dataset.json");
$data = json_decode($data, true); 

foreach ($data as $person) {
    if (isset($person['children']) && count($person['children']) > 2) {

        $fullName = $person['first_name'] . " " . 
                    $person['middle_name'] . " " . 
                    $person['last_name'];

        echo $fullName . " has " . count($person['children']) . " children. \n";
    }
}
?>