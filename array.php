<?php 
    $title = "Array";
    include "includes/header.php" ;
?>
    <?php
    //a variable
    $num = 3;

    //an Array
    //only one data type
    $numbers = array(1,2,3,4,5,6,7,8,9,10);
    //you can access the value of array by using the array index
    echo "<p>$numbers[5]</p>";
    echo "<p>$numbers[9]</p>";

    $size = count($numbers);
    echo "<p>Size Of Array : $size</p>";

    for($count = 0; $count < $size; $count++)
    {
        echo "<p>$numbers[$count]</p>";
    }
    ?>

<?php 
require "includes/footer.php";
?>