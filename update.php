<?php 
    include 'connect-inc.php';

    $sql = "UPDATE tableName SET field1=?, field2=? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, "value1");
    $stmt->bindValue(2, "value2");
    $stmt->bindValue(3, $id);
   
    $stmt->execute();
    $count = $stmt->rowCount();   // Returns number of rows deleted
