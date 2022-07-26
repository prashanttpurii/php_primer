<?php 
    $title = "Functions";
    include "includes/header.php" ;
?>

<h1><?php echo $title?></h1>

    <?php 
    
    /* defining a function */

    function writeMessage()
    {
        echo "you are really a nice person, have a nice day! <br>";
    }

    /* calling a function*/
    writeMessage();
    echo "<hr>";
    writeMessage();

    /*defining a function with parameters */
    function addFunction($num1, $num2)
    {
        $sum = $num1 + $num2;
        $num2 = $num2 + 10;
        echo "The sum of $num1 and $num2 is: $sum <br>";
    }

    //pass by referene - using &(ampersent) in parameter
    function changeNum(&$num)
    {
        $num = $num + 10;
        // $num+= 10;
    }

    function returnProduct($num1, $num2)
    {
        $prod = $num1 * $num2;
        return $prod;
    }


    $num = 500;
    addFunction(10,20);
    addFunction(10,$num);
    addFunction('10',"20");

    changeNum($num);
    echo "$num <br>";

    $return_value = returnProduct(10, 200);
    echo "$return_value <br>";
    echo "<br>";
    ?>

<?php 
require "includes/footer.php";
?>