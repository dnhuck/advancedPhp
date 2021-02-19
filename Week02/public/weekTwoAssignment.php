<?php

include_once ('contact.class.php');

$textErrMsg = "";
$emailErrMsg = "";
$dobErrMsg = "";
$messageErrMsg = "";

if(isset($_POST['submit'])){

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $message = $_POST['message'];

    $validContactForm = new validateContactForm();

    //$validContactForm->getDataFromForm();
    $validContactForm->validateFirstName($fName);
    $validContactForm->validateLastName($email);
    $validContactForm->validateDob($dob);
    $validContactForm->validateMessage($message);
    //$validContactForm->saveData();

    if($validContactForm == ""){
        $validContactForm->saveData();
    }

}

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

        h1,h2,h3{
            text-align: center;
        }

        #container form input, textarea{
            display: block;
            padding-bottom: 10px;
            margin: auto;
            margin-bottom: 5px;
            width: 80%;
        }

        span{
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div id="container">
        <h1>WDV 441: Advanced Php</h1>
        <h2>Week 2 Assignment</h1>
        <h2>Form Validation</h2>


        <form method="POST" action="weekTwoAssignment.php">

            <input type="text" name="fName" placeholder="Enter First Name" > <span><?php echo $textErrMsg; ?></span>
            <input type="text" name="lName" placeholder="Enter Last Name"  ><span><?php echo $textErrMsg; ?></span>

            <input type="email" name="email" placeholder="Enter Email"><span><?php echo $emailErrMsg; ?></span>

            <input type="text" name="dob" placeholder="Enter Date of Birth: YYYY-MM-DD"><span><?php echo $dobErrMsg; ?></span>

            <textarea name="message" placeholder="Leave me a message!" ></textarea><span><?php echo $textErrMsg; ?></span>

            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">

        </form>
    </div>

</body>
</html>