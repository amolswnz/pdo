<?php 
    include 'connect-inc.php';

    /* Insert data into table
        Conditions 
            The form should have same attribute name as the database table field name
            There should be no additional field in the form which does not belong to any database table field 
        eg. If there is a field name in database table as userName the input tag in form should have name='userName'
    */
    $keys = implode(",", array_keys($_POST));
    $placeholders = placeholders($_POST);
    
    $sql = "INSERT INTO xtable ($keys) VALUES ($placeholders)";
    
    $stmt = $pdo->prepare($sql);

    $count=1;
    foreach ($_POST as $value) {
        $stmt->bindValue($count++, $value);
    }

    $stmt->execute();
    $lastId = $pdo->lastInsertId();     // Returns last inserted id