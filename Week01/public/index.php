<?php
    // create an array with 10 names
    // store a random number between 0 and 20 (see the rand() PHP function) into  a variable
    // using the random number stored and PHP/HTML to display
    // show the text: Hello <name> if the number is between 0 and 9 where <name> is the  value from the array at the index of the random number​
    // if the random number is greater than the bounds of the array, show the text: Name List  and then output all names in the array onto the page
    
    // random number syntax rand(min,max);
    // array syntax $var = array(); or $var1 = "" $var2=" " $var3 = "" etc

    // extra display random number


    // load data
    $names = array('Michael', 'Jim', 'Dwight', 'Pam', 'Angela', 'Andy', 'Kevin', 'Stanley', 'Kelly', 'Ryan');
    $randomNumber = rand(0,20);

    $numberUnder10 = ($randomNumber < 9 ? true : false);

    // display data
    if($randomNumber < 9){
        $numberUnder10 = true;
    }else if($randomNumber > 9){
        $numberUnder10 = false;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week one assignment</title>

    <style> @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap');</style>

    <style>

        body{
            background-color: white;
        }

        #container{
            width: 90%;
            margin: auto;
            text-align: center;
            background-color: white;
            color: black;
            padding: 10px;
            border: 2px solid black;
            box-shadow: 5px 5px 15px black;
            font-family: 'Chakra Petch', sans-serif;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Week One Assignment</h1>
        <h2>WDV 490: Advanced PHP</h2>

        <?php 
        if($numberUnder10){ ?>
                <img src="images/office.jpg" alt="the office" name="the office" width = "300px"/><br>
                <?php echo 'Hello ' . $names[$randomNumber]; ?>
        <?php } else{ ?>

            <p>Name List:</p>
            <?php  foreach($names as $people)
                echo $people . '<br>' . '<p></p>';
            ?>
            <iframe src="https://vlipsy.com/embed/hG4sCTmw" width="300" frameborder="1"></iframe>
        <?php } ?>
    </div>
</body>
</html>