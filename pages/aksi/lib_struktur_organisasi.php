<?php
if (isset($_POST['SimpanStrukturOrganisasi'])) {
	$OrmawaID    = $_POST['OrmawaID'];
	$JabatanID   = Guid();
	$NamaJabatan = $_POST['NamaJabatan'];
	$Warna       = $_POST['Warna'];
	$Urutan      = $_POST['Urutan'];
	$query       = mysqli_query($koneksi,"INSERT INTO `jabatan`(
						  `JabatanID`,
						  `OrmawaID`, 
						  `NamaJabatan`,
						  `Urutan`, 
						  `Warna`) VALUES (
						  '$JabatanID',
						  '$OrmawaID',
						  '$NamaJabatan',
						  '$Warna',
						  '$Urutan')");
	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&StrukturOrganisai=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&StrukturOrganisai=active"
			  </script>';
	}
}elseif (isset($_POST['UpdateStrukturOrganisasi'])) {
	$JabatanID   = $_POST['JabatanID'];
	$NamaJabatan = $_POST['NamaJabatan'];
	$OrmawaID    = $_POST['OrmawaID'];
	$Warna       = $_POST['Warna'];
	$Urutan      = $_POST['Urutan'];
	$query       = mysqli_query($koneksi,"UPDATE `jabatan` SET 
							  `OrmawaID`='$OrmawaID',
							  `NamaJabatan`='$NamaJabatan',
							  `Warna`='$Warna',
							  `Urutan`= '$Urutan' 
							  WHERE `JabatanID`='$JabatanID'");
	if ($query) {
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&StrukturOrganisai=active"
			  </script>';
	}else{
		echo '<script>
		      document.location = "?page=detail_ormawa&user=active&OrmawaID='.$OrmawaID.'&StrukturOrganisai=active"
			  </script>';
	}
}

?>