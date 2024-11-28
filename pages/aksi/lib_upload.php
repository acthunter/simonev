<?php
if (isset($_POST['UpdateProposal1'])) {
 	$OrmawaID        = $_GET['OrmawaID'];
 	date_default_timezone_get("Asia/Jakarta");
	$date = date("Y-m-d");
	$temp_name = $_FILES['Foto']['tmp_name'];
	$name_file = $_FILES['Foto']['name'];
	$type_file = $_FILES['Foto']['type'];
	$size = $_FILES['Foto']['size'];
	$NamaFoto = $_POST['NamaFoto'];

	if (empty($temp_name)) {
		$nm_foto = $_POST['NamaFoto'];
	}else{	
		$file_ext=strtolower(end(explode('.',$_FILES['Foto']['name'])));
      		$expensions= array("jpeg","jpg","png");

		if (in_array($file_ext,$expensions)=== false) {
			echo "salah";
		}elseif($size >= 3097152){
			echo "upload maksimal 3 mb";
		}else{
			$Move = move_uploaded_file($temp_name, 'upload/'.$date."-".$name_file.'');
			if ($Move) {
				unlink('"upload/'.$file.'"');
				$nm_foto  = $date."-".$name_file;
			}
		}
	} 
	$query = mysqli_query($koneksi,"UPDATE `ormawa` SET `Foto`='$nm_foto' WHERE `OrmawaID`='$OrmawaID'");
 	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&Akun=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&Akun=active"
			  </script>';
	}
 }
?>