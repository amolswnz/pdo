<?php 
function getRandomDate($start_date, $end_date, $returnFormat="Y-m-d H:i:s") {
    // Convert to timetamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return date($returnFormat, $val);
}

function getInitials($string) {
    $acronym = "";
    $words = explode(" ", $string);

    foreach ($words as $word) {
        $acronym .= $word[0];
    }
    return $acronym;
}

