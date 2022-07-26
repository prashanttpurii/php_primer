<?php 
    $title = "Switch Statement";
    include "includes/header.php" ;
?>

<h1><?php echo $title?></h1>

    <?php 
    $grade = 'A';

    switch($grade)
    {
        case 'A':
        echo '<h2 style="color:green">Outstanding!</h2>';
        break;

        case 'B':
        echo '<h2 style="color:blue">Outstanding!</h2>';
        break;

        default:
        echo '<h2 style="color:red">Need Improvement!</h2>';
        break;
    }
    ?>

<?php 
require "includes/footer.php";
?>