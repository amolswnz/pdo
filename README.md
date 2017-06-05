# PDO in PHP

Examples of PDO queries in PHP
 1. Connecting to database `connect-inc.php`
 2. Selecting data from database `select.php`
 3. Inserting data into database `insert.php`
 4. Updating data `update.php` 
 5. Deleting data `delete.php`
 6. Inserting multiple rows in databsase `multiple-insert.php`

* Insert files require `placeholders($dataArray)` function which generates ?,? depending on the inputted array<br>
this function is included in `connect-inc.php`

------
### Following files are NOT related to PDO 

#### DateTime function reference `date-time.php`
The Object Oriented approach to handle dates in PHP
 * Set default TimeZone
 * Create date from various formats
 * Modify created date 
 * Compare two dates
 * Add/Subtract interval to a date
 * Repeat Interval

#### Helper functions `functions.php`
 * Generates random date between startDate and endDate <br> `getRandomDate($startDate, $endDate, $returnFormat="Y-m-d H:i:s")`
 * Get initials from full name <br> `getInitials($string)`  
 * Generate random password <br> `getRandomPassword($length = 10, $special="!@%#")` 
 
#### Adding Timestamp to databases
ALTER TABLE xtablename ADD `dateCreated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP; <br>
ALTER TABLE xtablename ADD `dateUpdated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;


#### Remove duplicates
DELETE n1 FROM tableName n1, tableName n2 WHERE n1.tableId > n2.tableId AND n1.fieldName = n2.fieldName
