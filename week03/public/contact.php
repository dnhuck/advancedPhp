<?php


    
    function validateFirstName($fName){
        if (!filter_var(!$fName, FILTER_SANITIZE_STRING)){
            return ("Please Enter a Valid First Name!");
        }
        return "";

    }

    function validateLastName(){
        if (!filter_var(!$lName, FILTER_SANITIZE_STRING)){
            return ("Please Enter a Valid Last Name!");
        }
        return "";

    }

    // Validating the Email
    function validateEmail(){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return ("Please Enter a Valid Email. Example: youremail@email.com");
        }
        return "";
    }

    function validateDob(){
        if(strtotime($dob) == false){
            echo ("Please Enter a Valid Email. Example: youremail@email.com");
        }
        return "";
    }

    function validateMessage(){
        if (!filter_var(!$message, FILTER_SANITIZE_STRING)){
            return ("Please Enter a Valid Message!"); 
        }
        return "";

    }



?>