<?php
    
    
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week Two Assignment: Form Validation</title>
    <style>

        #container{
            width: 90%;
            padding: 10px;
            margin: auto;
            
        }

        #container form input{
            display: block;
            padding: 10px;
            width: 80%;
        }
    </style>
</head>
<body>
    
    <div id="container">
        <h1>WDV 441: Advanced Php</h1>
        <h2>Week 2 Assignment</h1>
        <h2>Form Validation</h2>


        <form methed="post" action="contact.php">

            <input type="text" name="fName" placeholder="Enter First Name" required> <span> <?php validateFirstName(); ?></span>
            <input type="text" name="lName" placeholder="Enter Last Name"  required>

            <input type="email" name="email" placeholder="Enter Email" required>

            <input type="text" name="dob" placeholder="Enter Date of Birth: MM/DD/YYYY" required>

            <textarea name="message" placeholder="Leave me a message!" required></textarea>

            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">

        </form>

    </div>

</body>
</html>