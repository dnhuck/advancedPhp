<div class="proprietary-faq-widget-div">
	<ul class="proprietary-faq-widget-ul">
    <?php foreach ($faqList as $faqInfo) { ?>
			<?php if($faqCount++ >= $faqLimit) break; ?>
			<h1 class="proprietary-faq-widget-ul">question: <?= $faqInfo["faq_question"]; ?></h1>
			<li class="proprietary-faq-widget-ul">answer: <?= $faqInfo["faq_answer"]; ?></li>
		<?php } ?>
	</ul>
</div>