<table id="row_<?= $row['id']; ?>" class="table">
    <thead>
	    <th>ID</th>
		<th>Nama</th>
		<th>Kamar</th>
		<th>Tujuan Rumah Sakit</th>
		<th>Rencana Masuk</th>
	</thead>
	<tbody>
	    <tr>
		    <td><?= $row['id'] ?></td>
			<td><?= $row['nama'] ?></td>
			<td><?= $options[$row['jenis_surat']] ?></td>
			<td><?= $row['tujuan_rs'] ?></td>
			<td><?= $row['rencana_masuk'] ?></td>
			<!-- <td><a href="#" onclick="printRow(<?= $row['id']; ?>)">Cetak</a></td> -->
		</tr>
	</tbody>
</table>