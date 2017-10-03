<?php //filename: formmatakuliah.php
if($_GET['action'] == "edit") {
	echo "<h1>Edit Mata Kuliah</h1>";
	include ("db.php");
	$query = "SELECT * FROM mata kuliah
			  WHERE id = $_GET[id]";
	$hasil = mysqli_query($koneksi, $query);
	$row   = mysqli_fetch_assoc($hasil); 
}else{
	echo "<h1>Add mata kuliah</h1>";
	$row['kode_matkul'] = "";
	$row['nama_matkul'] = "";
	$row['id'] = "";
}
?>
<form action="prosesmatakuliah.php?action=<?php echo $_GET['action']; ?>" method="post">
		<fieldset style="border:2px solid DodgerBlue">
			<legend>Personal Information : </legend>
	Kode Mata Kuliah :
	<input type="text" name="kode_matkul" value="<?php echo $row['kode_matkul']; ?>" />
	<br />
	Nama Mata Kuliah :
	<input type="text" name="nama_matkul" value="<?php echo $row['nama_matkul']; ?>" />
	<br />
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
		</fieldset>
</form>
