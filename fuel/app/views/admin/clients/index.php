	<h2>Client Index</h2>
	<?= Html::anchor('admin/clients/add', 'Add Client') ?>

	<hr>

	<table>
		<tr>
			<td>name</td>
			<td>created_at</td>
			<td>updated_at</td>
		</tr>

		<?php foreach ($clients as $client): ?>

		<tr>
			<td><?= Html::anchor("admin/client/view/{$client->url}", $client->name) ?></td>
			<td><?= $client->created_at ?></td>
			<td><?= $client->updated_at ?></td>
		</tr>

		<?php endforeach; ?>
	</table>