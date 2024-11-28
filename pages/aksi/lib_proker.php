<?php
if (isset($_POST['SimpanProker'])) {
	$ProkerID 		   = Guid();
	$OrmawaID	       = $_POST['OrmawaID'];
	$TanggalBuat       = date('Y-m-d');
	$TanggalPelaksanaan= $_POST['TanggalPelaksanaan'];
	$ProgramKerja	   = $_POST['ProgramKerja'];
	$Anggaran          = $_POST['Anggaran'];
	$PenanggungJawab   = $_POST['PenanggungJawab'];
	$query             = mysqli_query($koneksi,"INSERT INTO `proker`(
									    `ProkerID`, 
									    `OrmawaID`, 
									    `TanggalBuat`, 
									    `ProgramKerja`,
									    `TanggalPelaksanaan`, 
									    `Anggaran`,
									    `PenanggungJawab`)VALUES (
									    '$ProkerID',
									    '$OrmawaID',
									    '$TanggalBuat',
									    '$ProgramKerja',
									    '$TanggalPelaksanaan',
									    '$Anggaran',
									    '$PenanggungJawab')");
										
	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
	}
}elseif ($_GET['NAP']) {
	$ProkerID = $_GET['ProkerID'];
	$NA       = $_GET['NAP'];
	$query             = mysqli_query($koneksi,"UPDATE `proker` SET
									  `NA`='$NA' 
									   WHERE `ProkerID`='$ProkerID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
	}
}elseif (isset($_POST['UpdateProker'])) {
	$ProkerID 		   = $_POST['ProkerID'];
	$OrmawaID	       = $_GET['OrmawaID'];
	$TanggalPelaksanaan= $_POST['TanggalPelaksanaan'];
	$ProgramKerja	   = $_POST['ProgramKerja'];
	$Anggaran          = $_POST['Anggaran'];
	$PenanggungJawab   = $_POST['PenanggungJawab'];
	$query             = mysqli_query($koneksi,"UPDATE `proker` SET 
									 `ProgramKerja`='$ProgramKerja',
									 `TanggalPelaksanaan`='$TanggalPelaksanaan',
									 `Anggaran`='$Anggaran',
									 `PenanggungJawab`='$PenanggungJawab'
									  WHERE `ProkerID`='$ProkerID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
	}
}
elseif (isset($_POST['UpdateProposal'])) {
	mkdir("file");
$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "file/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
	$ProkerID 		   = $_POST['ProkerID'];
	$dokumen   = $_POST['dokumen'];
	
	$query = mysqli_query($koneksi,"UPDATE `proker` SET `dokumen`='$dokumen' WHERE `ProkerID`='$ProkerID'");

	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
			  
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&ProgramKerja=active"
			  </script>';
	}
}
?>
	
