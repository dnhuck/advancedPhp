<?php

session_start();

require_once('../inc/user.class.php');

$user = new user();
$user->load($_SESSION['user']);
// $canEdit = $user->data['user_level'] == '3';

// if($canEdit){
//     header('Location: user-edit.php');
//     exit;
// }else{
//     echo('You dont dont have access to edit users');
//     header('Refresh: 5; Location: user-list.php');
//     exit;
// }

//var_dump($_SESSION);

$userList = $user->getList();

require_once('../tpl/user-list.tpl.php')

?>

