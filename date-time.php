<?php 
    date_default_timezone_set('Pacific/Auckland');  // Set NZ TimeZone

    $date = new DateTime();                                     // Get current date and time
    $date = new DateTime('2016, December 20');                  // Set date using string
    $date = new DateTime('2016-12-20');                         // Set date MySQL format
    $date = new DateTime('+2 days');                            // Set date today + 2 days
    $date = new DateTime('-2 days');                            // Set date today - 2 days
    $date = DateTime::createFromFormat('j-M-Y', '20-Dec-2016'); // Create date using custom format


    $date = new DateTime();
    $date->setDate(2016, 12, 20);               // yyyy, mm, dd will set the the specified date
    $date->setTime(20, 3, 20);                  // hh, mm, ss (optional) will modify the time
    $date->modify('tomorrow');                  // String based manipulation
    $date->setTimestamp(1482145200);            // Modify using a unix timestamp


    $date1 = new DateTime('December 20th, 1980');
    $date2 = new DateTime('December 11th, 1962');
    if($date1 > $date2)
        echo 'date1 is greater than date2';
    $diff = $date1->diff($date2);   // $diff->invert = 0 
    $diff = $date2->diff($date1);   // This returns $diff->invert = 1 as $date1 > $date2


    $date = new DateTime('2016-12-20');
    $interval = new DateInterval('P1Y2M3DT4H5M6S'); 
            // P xY xM xD
            // T xH xM xS
    $date->add($interval);
    $date->sub($interval);


    // Show date of at each interval specified from startDate to endDate
    $interval = new DateInterval('P7D');
    $startDate = new DateTime("2016-12-20");
    $endDate = new DateTime("2017-12-20");
    $period   = new DatePeriod($startDate, $interval, $endDate);
    
    foreach($period as $dt) {
        echo $dt->format('l, F j, Y'), "<br>";    // Displaying the date
    }

    // Function manipulation coming soon