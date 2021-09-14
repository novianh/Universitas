<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>
	<div class="container">
		<div class="d-inline-flex flex-column bd-highlight mb-3">
			<h2 class="p-4 bd-highlight"> Form Upload Gambar</h2>
			<form action="" method="post" enctype="multipart/form-data" class="p-4 bd-highlight">
			<div class="input-group">
				<input type="file" name="berkas" class="form-control" />
				<input type="submit" name="upload" value="UPLOAD" class="btn btn-outline-primary" />
			</div>
			</form>

			<?php
			date_default_timezone_set("Asia/Jakarta");
			if (isset($_FILES['berkas'])) {
				$namaFile = $_FILES['berkas']['name'];
				$namaSementara = $_FILES['berkas']['tmp_name'];
				$ukuran = $_FILES['berkas']['size'];
				$type = $_FILES['berkas']['type'];
				$valid  = array('jpg', 'png');
				$uploadOK = 1;
				$imageFileType = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

				if (strlen($namaFile)) {
					list($txt, $ext) = explode(".", $namaFile);
					if (in_array($ext, $valid)) {
						if (!$ukuran < 2000000) {
							$editedname = date('Ymd_his_') . $namaFile;
							move_uploaded_file($namaSementara, 'img/' . $editedname);
						} else {
							echo "<script type=\"text/javascript\">window.alert('Ukuran file terlalu besar.')</script>";
							$uploadOK = 0;
						}
					} else {
						echo "<script type=\"text/javascript\">window.alert('Format gambar tidak valid')</script>";
						$uploadOK = 0;
					}
				}
			} ?>

			<table border='1' class="table table-hover  table-striped table-bordered border-dark">
				<tr align='center' style='font-weight: bold;'>
					<td>No</td>
					<td width="40%">Nama File</td>
					<td>Ukuran</td>
					<td>Tipe</td>
					<td>Image</td>
					<td>Aksi</td>
				</tr>
				<?php tampilan(); ?>
			</table>

			<?php
			function tampilan()
			{
				$dir = scandir('img');
				$jumlah = count($dir);
				for ($i = 2; $i < $jumlah; $i++) {
					if (!file_exists($dir[$i])) { ?>
						<tr align=' center'>
					<td> <?php echo ($i - 1); ?> </td>
					<td> <?php echo $dir[$i]; ?> </td>
					<td> <?php echo round(filesize('img/' . $dir[$i]) / 1024); ?> KB </td>
					<td> <?php echo pathinfo($dir[$i], PATHINFO_EXTENSION); ?> </td>
					<td> <img src="img/<?php echo $dir[$i]; ?>" width="100px" /> </td>
					<td> <a href="rename.php?id=<?php echo $dir[$i]; ?>" class="btn btn-outline-primary">Rename</a>
						<br><br>
						<a href="hapus.php?id=<?php echo $dir[$i]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus file ini?')" class="btn btn-outline-danger">Delete</a>
					</td>
				</tr> <?php
					}
				}
			} ?>
		</div>
	</div>
</body>

</html>