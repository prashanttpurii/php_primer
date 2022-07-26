<?php 
    $title = "Index";
    include "includes/header.php" ;
?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br>
    <?php 
    //printing to HTML using echo
    echo "Hello PHP";
    //you can echo HTML tags
    echo "<br>";
    echo "Second Line";
    echo "<br>";
    
    //variable declaration - variables need a "$"
    $name = 'Prashant Puri';
    $age = "21";
    $hobby = "Coding";

    //echo variable
    echo $name;
    echo "<h1>My Name is: $name</h1>";
    echo "<h1>My Age is: $age</h1>";

    echo '<h1>My Hobby is: '.$hobby.'</h1>';
    ?>

    <button type="button" class="btn btn-outline-primary"><a href="array.php" target="_blank" rel="noopener noreferrer">Click Me</a></button>
    <br>

<?php 
require "includes/footer.php";
?>