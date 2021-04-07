<html>
    <body>
        <div>
            Username: <?php echo (isset($userDataArray['username']) ? $userDataArray['username'] : ''); ?><br>
        </div>

        <div>
            User Level: <?php echo (isset($userDataArray['user_level']) ? $userDataArray['user_level'] : ''); ?><br>
        </div>

        <div>
            <?php if (is_file(dirname(__FILE__) . "/../public/images/" . $userDataArray['user_ID'] . "_user.jpg")) { ?>
                <img src="images/<?php echo $userDataArray['user_ID'] . "_user.jpg"; ?>"/>
            <?php } ?>
        </div>
        
        <a href="user-list.php">back</a>
    </body>

    <a href="index.php">Home</a>
</html>

<!--
    Questions
    1. fix error - use 0f undefined array key user_ID
        - The issue with week 8 is with not having the key field in the list of columns and the set() function is then excluding it.  
          Will need to figure out a way around that.
        - not saving image

    2. How to go about limiting access to user level. 
        - Update your Edit User functionality to only be allowed for a specific user level of your user when they are logged in
        - Incorporate your user level and only allow users of a certain level to access the report
        - If statment?
        - How do I target and select the User level from the table/database

    $userData should be data
!>