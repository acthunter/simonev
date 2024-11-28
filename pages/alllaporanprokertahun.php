<style media="print">
.noprint     { display: none }
</style>
<style type="text/css">
.kiri {
	text-align: left;
	float: left;
}
.cetak {
	font-family: sans-serif;
	font-size: 13px;
}
</style>
<div class="col-lg-12">
    <div class="panel panel-color panel-success">
        <div class="panel-heading"><table width="877" border="-1" align="center">
     <tr>
                 <th width="95" scope="col"><img src="./img/upi-copy.jpg" width="224" height="145" /></th>
                 <th width="772" scope="col"><h2>UNIVERSITAS PUTRA INDONESIA YPTK PADANG</h2>
                 <h3>PROGRAM ORGANISASI MAHASISWA (UKM) YPTK PADANG</h3></th>
               </tr>
             </table>
</p>
<div align="center">
<p><h3> Laporan Proker Pertahun</h3></p>
</div>
</div> 
        <div class="panel-body">
<?php
$db_host = 'localhost';
$db_name = 'simonev';
$db_user = 'root';
$db_pass = '';

$tgl=isset($_POST['tgl']) ? $_POST['tgl'] : '';
$bulan =isset($_POST['bulan']) ? $_POST['bulan'] : '';
$tahun =isset($_POST['tahun']) ? $_POST['tahun'] : '';

try {
	$pdo = new PDO( 'mysql:host='.$db_host.';port='.$db_port.';dbname='.$db_name , $db_user, $db_pass, array(PDO::MYSQL_ATTR_LOCAL_INFILE => 1) );
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	$errMessage = 'Gagal terhubung dengan MySQL' . ' # MYSQL ERROR:' . $e->getMessage();
	die($errMessage);
}

$sql = "SELECT * FROM proker WHERE DATE_FORMAT(TanggalPelaksanaan,'%Y')='$tahun'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

?>
<?php
echo '<html>
		<head>
			<style>
				body {font-family:tahoma, arial}
				table {border-collapse: collapse}
				th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
				th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
				.subtotal td {background: #F8F8F8}
				.right{text-align: right}
			</style>
		</head>
		<body>';
		?>
        
        
<form name="form1" method="post" action="" class="noprint">
   
  Tahun : 
  <select name="tahun" id="tahun">
  <?php
for($i=2000;$i<=2040;$i++)
	echo "<option value='$i'>$i</option>"
?>
  </select>
  <script>

</script>
  <input type="submit" name="proses"  id="proses" value="Proses">
</form>
        <p>
          <?php

function format_ribuan ($nilai){
	return number_format ($nilai, 0, ',', '.');
}

// Ubah hasil query menjadi associative array dan simpan kedalam variabel result
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
          <style type="text/css">
#header {
	height: 125px;
	width: 696px;
	background-image: url(img/headerlap.png);
	margin: auto;
}
          </style>
        </p>
      
<table id="" class="table table-striped table-bordered">
		    <thead>
		        <tr>
		            <th width="1%">No</th>
		            <th>Organisasi Mahasiswa</th>
		            <th>Program Kerja</th>
		            <th>Tanggal Pelaksanaan</th>
                    <th>Anggaran</th>
		            <th>Pelaksanaan</th>
		        </tr>
		    </thead>
		    <tbody>
		      <?php
		      	date_default_timezone_set("Asia/Jakarta");
		      	$tgl_sekarang = date('Y-m-d');
		        $no =1;
		        $result = mysqli_query($koneksi,"SELECT * FROM proker as a
		        					   LEFT JOIN ormawa as b
		        					   ON a.OrmawaID = b.OrmawaID WHERE DATE_FORMAT(TanggalPelaksanaan,'%Y')='$tahun' AND a.NA='A'"); 
		        while ($data=mysqli_fetch_array($result)) {
		        if ($tgl_sekarang > $data['TanggalPelaksanaan']){
		        	$class= "class='danger'";
		        	$pelaksanaan = "Sudah Terlaksana";
		        }else{
		        	$pelaksanaan = "Belum Terlaksana";
		        }
		      ?>
		      <tr <?php if($tgl_sekarang>$data['TanggalPelaksanaan']){echo "class='danger'";} ?>>
		        <td><?php  echo $no++;?></td>
		        <td><?php  echo $data['NamaOrmawa'];?></td>
		        <td><?php  echo $data['ProgramKerja'];?></td>
		        <td><?php  echo $data['TanggalPelaksanaan'];?></td>
   		        <td><?php  echo $data['Anggaran'];?></td>
		        <td><?php  echo $pelaksanaan;?></td>
		      </tr>
		      <?php } ?>
		    </tbody>
		</table>
        <p>
          <input type="submit" name="proses" onclick="window.print();" class="noprint" id="proses" value="Print">
        </p>
        <p>&nbsp;</p>
        <table width="100%" border="0" align="center">
          <tr>
            <td height="73" colspan="2">&nbsp;</td>
            <td align="center">Batusangkar, <? echo date('d-m-Y')?><br />
              Pimpinan</td>
          </tr>
          <tr>
            <td height="73" colspan="2"><h2>&nbsp;</h2></td>
            <td width="18%" align="center" valign="bottom">Nip.   </td>
          </tr>
        </table>
        <p>&nbsp;</p>
        
        
      </div>
     </div>
</div>