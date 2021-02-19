<?php

    class validateContactForm{

        // VALIDATING THE TEXTFIELD
        function validateFirstName($text){
            if (empty($text) || filter_var(!$text, FILTER_SANITIZE_STRING) || !preg_match('/[a-zA-Z\s]+$/', $text) || $text == 'null' || $text == 'undefined' || $text == ''){
                echo '<script> alert("Please Enter a Valid First Name! Ex: John")</script>';
            }
            return "";
        }

        function validateLastName($text){
            if (empty($text) || filter_var(!$text, FILTER_SANITIZE_STRING) || !preg_match('/[a-zA-Z\s]+$/', $text) || $text == 'null' || $text == 'undefined' || $text == ''){
                echo '<script> alert("Please Enter a Valid Last Name! Ex: Doe")</script>';
            }
            return "";
        }

        // Validating the Email
        function validateEmail($email){
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) ){
                echo '<script> alert("Please Enter a Valid Email! Ex: user@email.com")</script>';
            }
            return "";
        }

        function validateDob($dob){
            if(empty($dob) || !strtotime($dob) || !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dob) ){
                echo '<script> alert("Please Enter a Valid Date of Birth! Ex format: YYYY-DD-MM")</script>';
            }
            return "";
        }

        function validateMessage($text){
            if (empty($text) || filter_var(!$text, FILTER_SANITIZE_STRING) || !preg_match('/[a-zA-Z\s]+$/', $text) || $text == 'null' || $text == 'undefined' || $text == ''){
                echo '<script> alert("Please Enter a Valid Message! Ex: Hello, I am...")</script>';
            }
            return "";
        }

        function saveData(){
                    
                    $mailTo = 'contact@davidhuck.net';
                    $headers = "From: " . $email;
                    $txt = "You have recieved an email from " . $fName . " " . $lName  . ".\n\n". "Date of birth: " . $dob . "\n\n" . "Email: " . $email . "\n\n" . $message;
            
                    mail($mailTo, $message, $txt, $headers);
                    echo "Email Sent!";
                    header('Location: weekTwoAssignment.php');
                    exit;
                }
            
        }

?>