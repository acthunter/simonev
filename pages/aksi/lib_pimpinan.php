<?php
 if (isset($_POST['SimpanPimpinan'])) {
 	$PimpinanID  = Guid();
 	$NIPY 		 = $_POST['NIPY'];
 	$Nama		 = $_POST['Nama'];
 	$Username    = $_POST['Username'];
 	$Password    = $_POST['Password'];
 	$NA 		 = $_POST['NA'];
 	$query = mysqli_query($koneksi,"INSERT INTO `pimpinan`(
 						 `PimpinanID`, 
 						 `NIPY`, 
 						 `Nama`, 
 						 `Username`, 
 						 `Password`, 
 						 `NA`) VALUES (
 						 '$PimpinanID ',
 						 '$NIPY ',
 						 '$Nama',
 						 '$Username',
 						 '$Password',
 						 '$NA')");
	if ($query) {
		echo '<script>
		      document.location = "?page=pimpinan&pimpinan=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=pimpinan&pimpinan=active"
			  </script>';
	}
 }elseif (isset($_POST['EditPimpinan'])) {
 	$PimpinanID  = $_POST['PimpinanID'];
 	$NIPY 		 = $_POST['NIPY'];
 	$Nama		 = $_POST['Nama'];
 	$Username    = $_POST['Username'];
 	$Password    = $_POST['Password'];
 	$NA 		 = $_POST['NA'];
 	$query = mysqli_query($koneksi,"UPDATE `pimpinan` SET 
 						`NIPY`='$NIPY',
 						`Nama`='$Nama',
 						`Username`='$Username',
 						`Password`='$Password',
 						`NA`='$NA' WHERE PimpinanID = '$PimpinanID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=pimpinan&user=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=pimpinan&user=active"
			  </script>';
	}
 	
 }elseif ($_GET['NA']) {
 	$PimpinanID = $_GET['PimpinanID'];
 	$NA 		 = $_GET['NA'];
 	$query = mysqli_query($koneksi,"UPDATE `pimpinan` SET 
 						`NA`='$NA' WHERE PimpinanID = '$PimpinanID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=pimpinan&user=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=pimpinan&user=active"
			  </script>';
	}
 	
 }
?>