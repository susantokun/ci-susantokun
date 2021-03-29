<div class="table-responsive" style="padding-top: 6px">
	<table class="table table-striped table-hover table-condensed" id="mytable" style="width: 100%">
		<thead>
			<tr class="active">
				<th class="text-center" width="30px" style="padding-left: 20px;">No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th class="text-center" width="160px" style="padding-left: 20px;">Tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1;
            foreach ($persons as $person) { ?>
				<tr>
					<td class="text-center" width="30px" style="padding-left: 20px;"><?= $no++ ?></td>
					<td><?= $person->name ?></td>
					<td><?= $person->address ?></td>
					<td class="text-center" width="160px" style="padding-left: 20px;">
						<?php echo anchor('admin/person/detail/' . $person->id, 'Detail'); ?> |
						<?php echo anchor('admin/person/edit/' . $person->id, 'Update'); ?> |
						<?php echo anchor('admin/person/delete/' . $person->id, 'Delete'); ?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
