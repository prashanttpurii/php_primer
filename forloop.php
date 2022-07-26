<?php 
    $title = "For Loop";
    include "includes/header.php" ;
?>
<h1><?php echo $title?></h1>

    <?php
    //for loop

    for($count = 0; $count < 10; $count++)
    {
        echo "<p>Hello World</p>";
    }

    for($count = 0; $count < 10; $count++)
    {
        echo "<p>The Value of count: $count</p>";
    }
    ?>
    
<?php 
require "includes/footer.php";
?>