<?php 
    include 'connect-inc.php';

    $sql = "DELETE FROM tableName WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id);
   
    $stmt->execute();
    $count = $stmt->rowCount();   // Returns number of rows deleted
