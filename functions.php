<?php 
function getRandomDate($startDate, $endDate, $returnFormat="Y-m-d H:i:s") 
{
    // Convert to timetamps
    $min = strtotime($startDate);
    $max = strtotime($endDate);
    // Generate random number using above bounds
    $val = rand($min, $max);
    // Convert back to desired date format
    return date($returnFormat, $val);
}

function getInitials($string) 
{
    $acronym = "";
    $words = explode(" ", $string);

    foreach ($words as $word) {
        $acronym .= strtoupper($word[0]) . ".";
    }
    return $acronym;
}

function getRandomPassword($length = 10, $special="!@%#") 
{
    $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUWXYZ";
    $digits = "1234567890";
    $password = substr(str_shuffle($letters), 0, $length-4);    // Random letters
    $password .= substr(str_shuffle($digits), 0, 2);            // At least two numbers
    $password .= substr(str_shuffle($special), 0, 2);           // At least two special characters

    do {
        $password = str_shuffle($password);         // Shuffles the characters of generated password
        if( ! in_array($password[0], str_split($special)) && ! in_array($password[0], str_split($digits)) )
            return $password;
        // IF first character of the password is not a special or a digit THEN return password
        // ELSE loop again 
    } while(1);
}
