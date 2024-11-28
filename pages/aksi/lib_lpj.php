<?php
if (isset($_POST['SimpanLpj'])) {
	$ProkerID 		   = Guid();
	$OrmawaID	       = $_POST['OrmawaID'];
		$ProkerID	   = $_POST['ProkerID'];
		$dokumen   = $_POST['dokumen'];
	
			mkdir("file");
$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "file/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);

	$query             = mysqli_query($koneksi,"UPDATE `proker` SET 
									 `lpj`='$dokumen',
									 `up`='OK'
									  WHERE `ProkerID`='$ProkerID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawalpj&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawalpj&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
	}

}
?>