<div class="proprietary-user-widget-div">
	<ul class="proprietary-user-widget-ul">
		<?php foreach ($userList as $userInfo) { ?>
			<?php if ($userCount++ >= $userLimit) break; ?>
			<li class="proprietary-user-widget-ul"><?= $userInfo["username"]; ?></li>
		<?php } ?>
	</ul>
</div>