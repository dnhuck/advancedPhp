<html>
	<head>
		<!-- <meta name="keywords" content="<?php //echo (isset($faqDataArray['keywords']) ? $faqDataArray['keywords'] : ''); ?>"/> -->
	</head>
    <body>
		    <h1><?php echo (isset($faqDataArray['faq_question']) ? $faqDataArray['faq_question'] : ''); ?></h1>
		<p>
            <?php echo (isset($faqDataArray['faq_answer']) ? $faqDataArray['faq_answer'] : ''); ?>
		</p>

		<h3>FAQ(s)</h3>
		<div class="proprietary-faq-widget-div">
			<ul class="proprietary-faq-widget-ul">
				<?php foreach ($faqList as $faqInfo) { ?>
				<?php if ($faqCount++ >= $faqLimit) break; ?>
				<li class="proprietary-faq-widget-ul"><?= $faqInfo["faq_name"]; ?></li>
				<?php } ?>
			</ul>
		</div>

		<h3>Available FAQ(s)</h3>
		<?php 

			json_decode($listOffaqs);
			echo ($listOffaqs);
					
		?>
	        
    </body>
</html>