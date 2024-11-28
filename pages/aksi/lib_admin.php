<?php
if (isset($_POST['SimpanAdmin'])) {
	$AdminID  = Guid();
	$NIM      = $_POST['NIM'];
	$Nama     = $_POST['Nama'];
	$Hp		  = $_POST['Hp'];
	$Email    = $_POST['Email'];
	$Password = $_POST['Password'];
	$Username = $_POST['Username'];
	$query = mysqli_query($koneksi,"INSERT INTO `admin`(
						`AdminID`, 
						`NIM`, 
						`Nama`, 
						`Hp`, 
						`Email`, 
						`Username`, 
						`Password`, 
						`LevelID`, 
						`NA`) VALUES (
						 '$AdminID',
						 '$NIM',
						 '$Nama',
						 '$Hp',
						 '$Email',
						 '$Password',
						 '$Username',
						 '1',
						 'A')");
	if ($query) {
		echo '<script>
		      document.location = "?page=admin&admin=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=admin&admin=active"
			  </script>';
	}
}elseif ($_GET['NA']) {
 	$AdminID = $_GET['AdminID'];
 	$NA 		 = $_GET['NA'];
 	$query = mysqli_query($koneksi,"UPDATE `admin` SET `NA`='$NA' WHERE AdminID = '$AdminID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=admin&admin=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=admin&admin=active"
			  </script>';
	}
 	
 }elseif (isset($_POST['UpdateAdmin'])) {
 	$AdminID  = $_POST['AdminID'];
	$NIM      = $_POST['NIM'];
	$Nama     = $_POST['Nama'];
	$Hp		  = $_POST['Hp'];
	$Email    = $_POST['Email'];
	$Password = $_POST['Password'];
	$Username = $_POST['Username'];
	$query = mysqli_query($koneksi,"UPDATE `admin` SET 
						 `NIM`='$NIM',
						 `Nama`='$Nama',
						 `Hp`='$Hp',
						 `Email`='$Email',
						 `Username`='$Username',
						 `Password`='$Password'
						  WHERE `AdminID`='$AdminID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=admin&admin=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=admin&admin=active"
			  </script>';
	}
 }
?>