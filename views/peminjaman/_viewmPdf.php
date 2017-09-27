<h2>Daftar Peminjaman Perpustakaan Politeknik Negeri Indramayu</h2>
<div>&nbsp;</div>
<div>&nbsp;</div>

<h3>Daftar Peminjaman </h3>

<table border="1" width="100%" cellpadding="7">
	<tr>
		<td width="15%">Nama Buku</td>
		<td width ="3%">:</td>
		<td><?= $model->idBuku->nama; ?></td>
	</tr>	
	<tr>
		<td>Nama User</td>
		<td>:</td>
		<td><?= $model->idUser->nama; ?></td>
	</tr>
	<tr>
		<td>Waktu dipinjam</td>
		<td>:</td>
		<td><?= $model->waktu_dipinjam; ?></td>
	</tr>
	<tr>
		<td>Waktu pengembalian</td>
		<td>:</td>
		<td><?= $model->waktu_pengembalian; ?></td>
	</tr>	
</table>