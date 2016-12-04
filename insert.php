<?php 
    include 'connect-inc.php';

    /* 
       Inserting multiple values in database using single query
    */


    $dataToInsert = array();
    foreach($insertData as $d){
        $questionMarks[] = '('  . placeholders('?', sizeof($d)) . ')';
        $dataToInsert = array_merge($dataToInsert, array_values($d));
    }

    $sql = "INSERT INTO tableName(field1, field2, ...) VALUES (?,?,...)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, "value1");
    $stmt->bindValue(2, "value2");
    // ...
    $stmt->execute();

    $lastId = $pdo->lastInsertId();     // Returns last inserted id