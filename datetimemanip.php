<?php 
    $title = "Date & Time Manipulation";
    include "includes/header.php";
?>
<h1><?php echo $title?></h1>

    <?php
    //date
    echo "Today's Date is: ".date("d/m/y")."<br>";  // d--> 01-31, m--> 01-12, y--> 22
    echo "Today's Date is: ".date("d/m/Y")."<br>";  // d--> 01-31, m--> 01-12, Y--> 2022
    echo "Today's Date is: ".date("d/M/Y")."<br>";  // d--> 01-31, M--> jan-dec, Y--> 2022
    echo "Today's Date is: ".date("D/M/Y")."<br>";  // D--> mon-sun, M--> jan-dec, Y--> 2022
    echo "Weekday is: ".date("l");                  // l--> weekday i.e mon-sun
    echo "<br> <hr>";

    //time
    echo "Time is : ".date("H:i:s")."<br>";         // H--> 24 hour format  , i--> minutes, s--> seconds
    echo "Time is : ".date("h:i:sa")."<br>";        // h--> 12 hour format, a--> am/pm
    echo "<br>";
    ?>

<?php 
require "includes/footer.php";
?>