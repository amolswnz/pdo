<?php 
    include 'connect-inc.php';

    /* Inserting multiple values in database using single query 
        number of fields and number of values to be inserted should be equal
        e.g. For 5 fields the $insertData each array should have 5 values
    */
    $dataFields = array('field1', 'field2', 'field3');

    $insertData[] = array('field1' => 'value1', 'field2' => 'value2', 'field3' => 'value3');
    $insertData[] = array('field1' => 'value4', 'field2' => 'value5', 'field3' => 'value6');

    $pdo->beginTransaction();
        $dataToInsert = array();
        foreach($insertData as $d){
            $questionMarks[] = '('  . placeholders($d) . ')';
            $dataToInsert = array_merge($dataToInsert, array_values($d));
        }

        $sql = "INSERT INTO xtable (" . implode(",", $dataFields) . ") VALUES " . implode(',', $questionMarks);
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute($dataToInsert);
        } catch (PDOException $e){
            echo "<div class='alert alert-error'>ERROR : " . $e->getMessage() . "</div>";
        }
    $pdo->commit();

/* Helper function to generate placeholders */
function placeholders($dataArray) {
    $result = array();
    $count = sizeof($dataArray);
    for($x=0; $x < $count; $x++){
        $result[] = "?";
    }
    return implode(",", $result);
}