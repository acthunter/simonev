<?php
mkdir("file");
$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "file/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "File berhasil diunggah."
?>