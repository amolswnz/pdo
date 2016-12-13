<?php 
    require_once 'connect-inc.php';

    $sql = "SELECT * FROM tableName WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();

    $result = $stmt->fetchAll();
