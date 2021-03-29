<?php echo anchor('admin/person', 'Back'); ?>
<table>
	<tr>
		<td>Name</td>
		<td>:</td>
		<td><?= $person->name ?></td>
	</tr>
	<tr>
		<td>Address</td>
		<td>:</td>
		<td><?= $person->address ?></td>
	</tr>
</table>
