<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rename</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<?php
	if (isset($_POST['btnRename'])) {
		$id = $_GET['id'];
		$folder = 'img/';
		$renamedName = $_POST['txtRenamedName'];

		if (file_exists($folder . $id)) {
			if (file_exists($folder . $renamedName)) {
				echo "<script type=\"text/javascript\">window.alert('File tujuan sudah ada!')</script>";
			} else {
				rename($folder . $id, $folder . $renamedName);
				header('Location: FORM.php');
			}
		}
	}
	?>
	<div class="container">
		<div class="d-inline-flex flex-column bd-highlight mb-3">
			<form action="" method="POST">
			<div class="p-4 bd-highlight""></div>
				<div class="input-group input-group-sm mb-3">
					<span class="input-group-text" id="inputGroup-sizing-sm">Nama file</span>
					<input class="form-control" type="text" name="txtRenamedName" value="<?php echo $_GET['id']; ?>" />
					<input type="submit" name="btnRename" value="Rename" class="btn btn-outline-primary" />
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>