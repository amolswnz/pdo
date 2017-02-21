<?php 
    require_once 'connect-inc.php';

    $sql = "SELECT * FROM tableName WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();

    $result = $stmt->fetchAll();

    // For selecting data using IN (..) query

    $inQuery = implode(',', array_fill(0, count($idsDataArray), '?'));

    $sql = "SELECT * FROM tableName WHERE id IN( $inQuery )";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($idsArray);
    $result = $stmt->fetchAll();
