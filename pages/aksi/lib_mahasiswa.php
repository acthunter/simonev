<?php
if (isset($_POST['SimpanMhs'])) {
	$MahasiswaID    = Guid();
	$NIM 		    = $_POST['NIM'];
	$Nama           = $_POST['Nama'];
	$Fakultas       = $_POST['Fakultas'];
	$JabatanID      = $_POST['JabatanID'];
	$TahunAngkatan  = $_POST['TahunAngkatan'];
	$TahunPeriode   = $_POST['TahunPeriode'];
	$NA 		    = $_POST['NA'];
	$OrmawaID       = $_GET['OrmawaID'];
	$query          = mysqli_query($koneksi,"INSERT INTO `mahasiswa`(
								`MahasiswaID`, 
								`OrmawaID`, 
								`NIM`, 
								`Nama`, 
								`Fakultas`, 
								`JabatanID`, 
								`TahunAngkatan`, 
								`TahunPeriode`, 
								`NA`)VALUES (
								'$MahasiswaID',
								'$OrmawaID ',
								'$NIM',
								'$Nama',
								'$Fakultas',
								'$JabatanID',
								'$TahunAngkatan',
								'$TahunPeriode',
								'$NA')");
	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&Mahasiswa=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&Mahasiswa=active"
			  </script>';
	}
}elseif ($_GET['NAM']) {
	$OrmawaID    = $_GET['OrmawaID'];
 	$MahasiswaID = $_GET['MahasiswaID'];
 	$NA 		 = $_GET['NAM'];
 	$query = mysqli_query($koneksi,"UPDATE `mahasiswa` SET 
 						`NA`='$NA' WHERE MahasiswaID = '$MahasiswaID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&Mahasiswa=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&Mahasiswa=active"
			  </script>';
	}
 	
 }elseif (isset($_POST['UpdateMHS'])) {
 	$MahasiswaID    = $_POST['MahasiswaID'];
	$NIM 		    = $_POST['NIM'];
	$Nama           = $_POST['Nama'];
	$Fakultas       = $_POST['Fakultas'];
	$JabatanID      = $_POST['JabatanID'];
	$TahunAngkatan  = $_POST['TahunAngkatan'];
	$TahunPeriode   = $_POST['TahunPeriode'];
	$NA 		    = $_POST['NA'];
	$OrmawaID       = $_GET['OrmawaID'];
 	$query = mysqli_query($koneksi,"UPDATE `mahasiswa` SET 
 						`NIM`='$NIM',
 						`Nama`='$Nama',
 						`Fakultas`='$Fakultas',
 						`JabatanID`='$JabatanID',
 						`TahunAngkatan`='$TahunAngkatan',
 						`TahunPeriode`='$TahunPeriode',
 						`NA`='$NA' WHERE `MahasiswaID`='$MahasiswaID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&Mahasiswa=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&Mahasiswa=active"
			  </script>';
	}
 }
?>