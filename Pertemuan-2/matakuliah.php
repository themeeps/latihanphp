<?php //filename: matakuliah.php
// 1. Koneksi
include("db.php");

// 2. Query
$query = "SELECT * FROM matakuliah";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Mata Kuliah</h1>
<a href="template.php?page=formmatakuliah&action=add">Tambah Data</a>
<table>
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
		while($row = mysqli_fetch_assoc($hasil)){
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['kode_mtk']; ?></td>
			<td><?php echo $row['nama_mtk']; ?></td>
			<td>
				<a href="template.php?page=formmatakuliah&id=<?php echo $row['id'];
				?>&action=edit">Edit</a>
				<a href="proses_matakuliah.php?action=delete&id=<?php echo $row['id'];
				?>">Delete</a>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>