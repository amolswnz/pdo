<?php 
    include 'connect-inc.php';

    /* 
       Inserting multiple values in database using single query
    */

    $dataFields = array('field1', 'field2', ...);

    $insertData[] = array('field1' => 'value1', 'field2' => 'value2', ....);
    $insertData[] = array('field1' => 'value3', 'field2' => 'value4', ....);

    $pdo->beginTransaction();
        $dataToInsert = array();
        foreach($insertData as $d){
            $questionMarks[] = '('  . placeholders('?', sizeof($d)) . ')';
            $dataToInsert = array_merge($dataToInsert, array_values($d));
        }

        $sql = "INSERT INTO tableName (" . implode(",", $dataFields ) . ") VALUES " . implode(',', $questionMarks);

        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute($dataToInsert);
        } catch (PDOException $e){
            echo "<div class='alert alert-error'>ERROR : " . $e->getMessage() . "</div>";
        }
    $pdo->commit();



/*
    Helper function to generate placeholders
*/
function placeholders($text, $count=0, $separator=","){
    $result = array();
    if($count > 0){
        for($x=0; $x<$count; $x++){
            $result[] = $text;
        }
    }
    return implode($separator, $result);
}