<?php

	if(isset($_POST['submit'])){
        
        
            function validateFirstName(){
                if (filter_var(!$fName, FILTER_SANITIZE_STRING)){
                    echo ("Please Enter a Valid First Name!");
                }
        
            }
        
            function validateLastName(){
                if (filter_var(!$lName, FILTER_SANITIZE_STRING)){
                    echo ("Please Enter a Valid Last Name!");
                }
        
            }
        
            // Validating the Email
            function validateEmail(){
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo ("Please Enter a Valid Email. Example: youremail@email.com");
                }
            }
        
            function validateDob(){
                if(filter_var($dob, )){
                    echo ("Please Enter a Valid Email. Example: youremail@email.com");
                }
            }
        
            function validateMessage(){
                if (filter_var(!$message, FILTER_SANITIZE_STRING)){
                    echo ("Please Enter a Valid Message!"); 
                }
        
            }

		$mailTo = 'contact@davidhuck.net';
		$headers = "From: " . $email;
		$txt = "You have recieved an email from " . $fName . " " . $lName  . ".\n\n". "Date of birth: " . $dob . "\n\n" . "Email: " . $email;


		mail($mailTo, $message, $txt, $headers);
		echo "Email Sent!";
		header('Location: weekTwoAssignment.php');


	}

?>