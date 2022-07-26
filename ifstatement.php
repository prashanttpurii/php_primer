<?php 
    $title = "If Statement";
    include "includes/header.php" ;
?>

<h1><?php echo $title?></h1>

    <?php 
    //An if statement that will carry out based on the values of the variable

    echo '<h2>If statement</h2>';

    $grade = 30;
    //===, ==, >=, <=, >, <
    if($grade >= 50)
    {
        echo '<h2 style="color:green">you are passed!</h2>';
    }
    else
    {
        echo '<h2 style="color:red">you are failed!</h2>'; 
    }

    //if-elseif-else
    $grade = 'C';

    if($grade == 'A')
    {
        echo '<h2 style="color:green">Outstanding!</h2>';
    }
    elseif($grade == 'B')
    {
        echo '<h2 style="color:blue">Excellent!</h2>';
    }
    else
    {
        echo '<h2 style="color:red">Need improvement!</h2>';
    }
    
    ?>

<?php 
require "includes/footer.php";
?>