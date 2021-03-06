<?php 
    require_once 'connect-inc.php';

    /* Inserting multiple values in database using single query 
        number of fields and number of values to be inserted should be equal
        e.g. For 5 fields the $insertData each array should have 5 values
    */
    $insertData[] = array('field1' => 'value1', 'field2' => 'value2', 'field3' => 'value3');
    $insertData[] = array('field1' => 'value4', 'field2' => 'value5', 'field3' => 'value6');
    // Get all the fields names from the insertData array
    $dataFields = array_keys($insertData[0]);

    $pdo->beginTransaction();
        $dataToInsert = array();
        foreach($insertData as $dataValue){
            $questionMarks[] = '('  . placeholders($dataValue) . ')';
            $dataToInsert = array_merge($dataToInsert, array_values($dataValue));
        }

        $sql = "INSERT INTO xtable (" . implode(",", $dataFields) . ") VALUES " . implode(',', $questionMarks);
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute($dataToInsert);
        } catch (PDOException $e){
            echo "<div class='alert alert-error'>ERROR : " . $e->getMessage() . "</div>";
        }
    $pdo->commit();
