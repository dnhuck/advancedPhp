<?php
require_once('../inc/user.class.php');

$user = new user();

$userDataArray = array();

// load the article if we have it
if (isset($_REQUEST['user_ID']) && $_REQUEST['user_ID'] > 0) 
{
    $user->load($_REQUEST['user_ID']);
    $userDataArray = $user->data;
}

echo json_encode($userDataArray);
?>


