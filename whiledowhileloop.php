<?php 
    $title = "While/Do-While Loops";
    include "includes/header.php" ;
?>
    <h1>While Loop</h1>

    <?php
    $grade = 0;
    //infinite loop
   /* while($grade < 10)
    {
        echo "<p>I am less than 10!</p>";
    } */
    //pre-condition loop
    while($grade < 10)
    {
        echo "<p>I am less than 10!</p>";
        $grade++;
    } 
    echo "Exit loop!";
    ?>

    <h1>Do-While Loop</h1>

    <?php
    //post-condition loop
    $grade = 0;
    do{
        echo "<p>I am do while loop</p>";
        $grade++;
    }while($grade < 10);
    echo "<p>Exit Loop!</p>";
    ?>

<?php 
require "includes/footer.php";
?>