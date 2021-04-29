<?php
require_once('../inc/faq.class.php');
include_once('curl-test.php');
include_once('faq-widget.php');
require_once('faq-rest-list.php');

$faq = new faq();

$faqDataArray = array();

if (isset($_REQUEST['faq_id']) && $_REQUEST['faq_id'] > 0) {
    $faq->load($_REQUEST['faq_id']);
    $faqDataArray = $faq->data;
}

// display the view
require_once('../tpl/faq.tpl.php');
?>