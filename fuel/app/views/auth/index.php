				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">Auth</h3>
						<ul class="nav masthead-nav">
							<li class="active"><?= Html::anchor('auth', 'User Info') ?></li>
							<li><?= Html::anchor('auth/logout', 'Logout') ?></li>
						</ul>
					</div>
				</div>

				<h2>properties</h2>
				<hr>

				<table>
					<?php foreach ($user::properties() as $property => $options): ?>
					<tr>
						<td><?= $property ?></td>
						<td><?= $user->$property ?></td>
					</tr>
					<?php endforeach; ?>
				</table>

				<br><br><br>
				
				<h2>metadata</h2>
				<hr>
				<?= var_export($user->metadata) ?>