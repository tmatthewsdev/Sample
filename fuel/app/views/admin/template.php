<html>
  <head></head>
  <body>
  	
  	<?php if (isset($user)): ?>
	<p>Logged in as <?= $user->email ?></p>
	<?php endif; ?>

	<hr>
	<?= $nav ?>
	<hr>
	<?= $content ?>
  </body>
</html>