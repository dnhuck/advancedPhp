<?php

include_once ('contact.php');
$fNameErrMsg = "";
$lNameErrMsg = "";
$emailErrMsg = "";

if(isset($_POST['submit'])){ 

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $message = $_POST['message'];

    $fNameErrMsg = validateFirstName($fName);

    if($fNameErrMsg == "" ){
        $mailTo = 'contact@davidhuck.net';
        $headers = "From: " . $email;
        $txt = "You have recieved an email from " . $fName . " " . $lName  . ".\n\n". "Date of birth: " . $dob . "\n\n" . "Email: " . $email;


        mail($mailTo, $message, $txt, $headers);
        echo "Email Sent!";
        header('Location: weekTwoAssignment.php');
    exit;
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

        #container form input{
            display: block;
            padding-bottom: 10px;
            width: 80%;
        }
    </style>
</head>
<body>
    
    <div id="container">
        <h1>WDV 441: Advanced Php</h1>
        <h2>Week 2 Assignment</h1>
        <h2>Form Validation</h2>


        <form methed="POST" action="weekTwoAssignment.php">

            <input type="text" name="fName" placeholder="Enter First Name" required> <span><?php echo $fNameErrMsg; ?></span>
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