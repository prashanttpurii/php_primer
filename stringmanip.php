<?php 
    $title = "String Manipulation";
    include "includes/header.php" ;
?>

<h1><?php echo $title?></h1>
    <?php
    //concatenation of string
    $phrase1 = "student who came late";
    $phrase2 = "in class, stand with rock";
    $name = "prashant puri";
    echo $phrase1 . ", named Tiffany, ".$phrase2;
    echo "<br> <hr>";

    //string transformation
    echo "<p>$name</p>";
    echo "uppercase first letter: ".ucfirst($name)."<br>";
    echo "uppercase first letter of each world: ".ucwords($name)."<br>";
    echo "upper case: ".strtoupper($name)."<br>";
    echo "lower case: ".strtolower("THIS STRING WAS IN UPPERCASE")."<br>";
    echo "<hr>";

    echo "repeat string: ".str_repeat('a',10)."<br>";
    echo "repeat string and transform into uppercase: ".strtoupper(str_repeat('a',10))."<br>";

    echo "get a substring: ".substr($name,4,6)."<br>";
    echo "get position of a string: ".strpos($name,'r')."<br>";
    //returns NULL
    //echo "get position of a string: ".strpos($name,'z')."<br>";

    echo "find character 'T' : ".strchr($name,'T')."<br>";
    echo "find character 't' : ".strchr($name,'t')."<br>";
    echo "find character 'a' : ".strchr($name,'a')."<br>";
    echo "find character ' ' : ".strchr($name,' ')."<br>";
    echo "<hr>";

    echo "length of the string $name is : ".strlen($name)."<br>";

    echo "without trim: "."A"." B C D "."E"."<br>";
    echo "trim spaces on both sides: "."A".trim(" B C D ")."E"."<br>";
    echo "trim spaces to the left: "."A".ltrim(" B C D ")."E"."<br>";
    echo "trim spaces to the right: "."A".rtrim(" B C D ")."E"."<br>";

    echo "replace a string with another string: ".str_replace('stand','sit',$phrase2)."<br>";
    echo "<br>";
    ?>

<?php 
require "includes/footer.php";
?>