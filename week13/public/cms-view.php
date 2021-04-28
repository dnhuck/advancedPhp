<?php
require_once('../inc/CMS.class.php');

$cms = new CMS();

$cmsDataArray = array();

//load the article if we have it
if (isset($_REQUEST['cms_id']) && $_REQUEST['cms_id'] > 0) {
    $cms->load($_REQUEST['cms_id']);
    $cmsDataArray = $cms->data;
}

// if (isset($_REQUEST['url_key']) && $_REQUEST['url_key'] > 0) {
//     $cms->loadKey($_REQUEST['url_key']);
//     $cmsDataArray = $cms->data;
// }

// display the view
require_once('../tpl/cms-view.tpl.php');
?>