<h2>Daftar Buku Perpustakaan Politeknik Negeri Indramayu<h2>
<div>&nbsp;</div>
<div>&nbsp;</div>

<h3>Daftar Buku </h3>

<table border="1" width="100%" cellpadding="7">
	<tr>
		<td width="15%">Nama Buku</td>
		<td width ="3%">:</td>
		<td><?= $model->nama; ?></td>
	</tr>	
	<tr>
		<td>Jenis Buku</td>
		<td>:</td>
		<td><?= $model->idJenis->jenis_buku; ?></td>
	</tr>
	<tr>
		<td>Penulis</td>
		<td>:</td>
		<td><?= $model->idPenulis->nama; ?></td>
	</tr>	
</table>