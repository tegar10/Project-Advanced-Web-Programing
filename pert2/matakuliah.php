<?php //filename: matakuliah.php
// 1. Koneksi
include ("db.php");

// 2. Query
$query = "SELECT * FROM mata kuliah";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Mata Kuliah</h1>
<a href="template.php?page=formmatakuliah&action=add">Tambah Data</a>
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
			<th>id</th>
			<th>Kode Mata Kuliah</th>
			<th>Nama Mata Kuliah</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($row = mysqli_fetch_assoc($hasil)) {
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['kode_matkul']; ?></td>
			<td><?php echo $row['nama_matkul']; ?></td>
			<td>
				<a href="template.php?page=formmatakuliah&id=<?php echo $row['id']; ?>&action=edit">Edit</a>
				<a href="prosesmatakuliah.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>