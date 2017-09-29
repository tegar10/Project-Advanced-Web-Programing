<?php //filename: mahasiswa.php
// 1. Koneksi
include ("db.php");

// 2. Query
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Mahasiswa</h1>
<a href="template.php?page=formmahasiswa&action=add">Tambah Data</a>
<style>
table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
}
table#t01 tr:nth-child(even) {
	width: 30%;
	background-color: #D8D8D8;
}
table#t01 tr:nth-child(odd) {
	width: 30%;
	background-color: #FFFFFF;
}
table#t01 th {
	background-color: #CEF6F5;
}
</style>

<table id="t01">
	<thead>
		<tr>
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($row = mysqli_fetch_assoc($hasil)) {
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nim']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['jurusan']; ?></td>
			<td>
				<a href="template.php?page=formmahasiswa&id=<?php echo $row['id']; ?>&action=edit">Edit</a>
				<a href="proses_mhs.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>