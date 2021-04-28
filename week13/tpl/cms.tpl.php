<html>
	<head>
		<title><?php echo (isset($cmsDataArray['title']) ? $cmsDataArray['title'] : ''); ?></title>
		<meta name="keywords" content="<?php echo (isset($cmsDataArray['keywords']) ? $cmsDataArray['keywords'] : ''); ?>"/>
	</head>
    <body>
		<h1><?php echo (isset($cmsDataArray['h1']) ? $cmsDataArray['h1'] : ''); ?></h1>
        <?php if (is_file(dirname(__FILE__) . "/../public/images/" . $cmsDataArray['cms_id'] . "_cms_banner.jpg")) { ?>
            <img src="images/<?php echo $cmsDataArray['cms_id'] . "_cms_banner.jpg"; ?>" width="50" height="50"/>
        <?php } ?>
		<p>
			<?php echo (isset($cmsDataArray['content']) ? $cmsDataArray['content'] : ''); ?>
		</p>

		<h3>Todays Weather</h3>
		<p>
			Date: <?php echo $jsonOutput['Days'][0]['date']; ?></br>
			High: <?php echo $jsonOutput['Days'][0]['temp_max_f']; ?></br>
			Low: <?php echo $jsonOutput['Days'][0]['temp_min_f']; ?></br>
			Precipitation: <?php echo $jsonOutput['Days'][0]['precip_total_in']; ?></br>
			Rain: <?php echo $jsonOutput['Days'][0]['rain_total_in']; ?>
		</p>

		<h3>Current Users</h3>
		<div class="proprietary-user-widget-div">
			<ul class="proprietary-user-widget-ul">
				<?php foreach ($userList as $userInfo) { ?>
				<?php if ($userCount++ >= $userLimit) break; ?>
				<li class="proprietary-user-widget-ul"><?= $userInfo["username"]; ?></li>
				<?php } ?>
			</ul>
		</div>
	        
    </body>
</html>