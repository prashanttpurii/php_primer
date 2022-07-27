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

    <button type="button" class="btn btn-primary">Click Me</button>
    <button type="button" class="btn btn-success">Click Me</button>
    <button type="button" class="btn btn-warning">Click Me</button>
    <a href="https://www.heroku.com" class="btn btn-danger" target="_blank">Heroku</a>
    <br>

<?php 
require "includes/footer.php";
?>