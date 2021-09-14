<?php

$folderUpload = "./assets/uploads";

# periksa apakah folder sudah ada
if (!is_dir($folderUpload)) {
    # jika tidak maka folder harus dibuat terlebih dahulu
    mkdir($folderUpload, 0777, $rekursif = true);
}
# simpan masing-masing file ke dalam array 
# dan casting menjadi objek 😎
$fileFoto = (object) @$_FILES['foto'];
# mulai upload file

// $destinationFileName = date('Ymd').'.'.$file_ext;
//             move_uploaded_file($file_tmp,"../complains_photos/".$destinationFileName);

$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name,
    "{$folderUpload}/{$fileFoto->name}"
);

if ($fileFoto->size > 1000 * 2000) {
    echo '<script>
    alert("gambar Terlalu Besar, Max 2MB");
    </script>';
} else if ($fileFoto->type !== 'image/jpeg') {
    echo '<script>
    alert("Format Gambar Tidak valid , Format Gambar Harus (JPG, Jpeg, gif, png) ");
    </script>';
} else if ($uploadFotoSukses) {
    $namaFoto = $_FILES['foto']['name'];
    $fotoType = $_FILES['foto']['type'];
    $today = date("Ymd");
    $namaFotoBaru = $today . "_" . $namaFoto;
    rename($uploadFotoSukses, $namaFotoBaru);
    echo $namaFotoBaru . "<br>";
    $link = "{$folderUpload}/{$fileFoto->name}";
    echo "Sukses Upload Foto: <a href='{$link}'>{$fileFoto->name}</a>";
    echo "<br>";
}
