<?php

    // this is the echo command. It outputs content to the browser after it is rendered by the server
    //echo 'hello world' . ' ' . '<br>';

    // This is a variable. It is represented by a dollar sign
    $myVar = "this is a variable" . '<br>';
   // echo $myVar;

    // this is a numeric variable or intiger. It is identified by the number after the variable. You cannot add a string to an interher
    $number = 7;
   // echo $number . ' ';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice for Advanced Php</title>
</head>
<body>

    <form action="#" method="POST" style="border: 2px solid green; width: 200px;">
        <label for="name">Enter Name:</label>
        <input type="text" name="name" id="name"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    
    <?php 

        if(isset($_POST['submit'] ) ){

            $name = $_POST['name'];

            $nameArr = array($name);

            foreach ($nameArr as $key => $people){
                echo 'the name is ' . $people;
            }

        }
    ?>

    <form action="#" method="POST" style="border: 2px solid red; width: 200px;">
        <label for="name">Enter Number 1:</label>
        <input type="text" name="num1" id="num1"><br>

        <label for="name">Enter Number 2:</label>
        <input type="text" name="num2" id="num2"><br>

        <input type="submit" value="submit1" name="submit1">
    </form>

    <?php 

        if(isset($_POST['submit1'] ) ){

            $sum = $_POST['num1'] + $_POST['num2'];

            echo 'your number is' . ' ' . $sum; 

        }
    ?>


    <h3>If statements</h3>

    <?php
        if(1 == 1){
            //echo 'true';
        }else{
            //echo ' false';
        }
    ?>

    <h3>Arrays</h3>  
    <?php
        $names = array('dave', 'john', 'peter');

        print_r($names);
        //echo $names[1];
    ?>

</body>
</html>