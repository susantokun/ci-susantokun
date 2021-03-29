<?php echo anchor('admin/person', 'Back'); ?>
<form action="<?= base_url('admin/person/update') ?>" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?= $person->name ?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" value="<?= $person->address ?>"></td>
		</tr>
		<tr>
			<td></td>
			<input type="hidden" name="id" value="<?= $person->id ?>">
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
