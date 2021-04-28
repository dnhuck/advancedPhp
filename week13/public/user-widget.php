<?php
require_once('../inc/user.class.php');

$userLimit = (isset($_GET["limit"]) ? intval($_GET["limit"]) : 5);

$user = new user();

$userList = $user->getList();

$userCount = 0;

// display the widget view
require_once('../tpl/user-widget.tpl.php');
?>