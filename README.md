#PDO in PHP

Examples of PDO queries in PHP
 1. Connecting to database `connect-inc.php`
 2. Selecting data from database `select.php`
 3. Inserting data into database `insert.php`
 4. Updating data `update.php` 
 5. Deleting data `delete.php`
 6. Inserting multiple rows in databsase `multiple-insert.php`

------

####DateTime function reference `date-time.php`
The Object Oriented approach to handle dates in PHP
 * Set default TimeZone
 * Create date from various formats
 * Modify created date 
 * Compare two dates
 * Add/Subtract interval to a date
 * Repeat Interval

####Helper functions not related to PDO `functions.php`
`function getRandomDate($startDate, $endDate, $returnFormat="Y-m-d H:i:s")`
Function to generate Random date between startDate and endDate

`function getInitials($string)`
Get initials from full name

`function getRandomPassword($length = 10, $special="!@%#")`
Generate random password