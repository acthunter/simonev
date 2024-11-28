<?php
 include "../config/koneksi.php"; 
  
?>
<?php
  $OrmawaID=$_REQUEST['OrmawaID'];
  $r = mysqli_query($koneksi,"SELECT * FROM ormawa WHERE OrmawaID='$OrmawaID'"); 
  $d=mysqli_fetch_array($r);
?>
  <h1>Struktur organisasi OMAWA <?php echo $d['NamaOrmawa']; ?></h1>
<hr>
<style type="text/css">
  table{
    width: 100%;
    font-size: 20px;
    border-collapse: collapse;
  }
  table,th,td{
    border:1px solid black;
  }
  th{
    text-align: left;
  }
</style>
 <table border="1">
      <?php
        $OrmawaID = $_GET['OrmawaID'];
        $no =1;
        $result = mysqli_query($koneksi,"SELECT * FROM jabatan WHERE OrmawaID='$OrmawaID' ORDER BY Urutan ASC"); 
        while ($data=mysqli_fetch_array($result)) {
      ?>
      <tr>
        <td width="1px" rowspan="2"><?php  echo $no++;?>.</td>
        <td colspan="2">
          <h3><?php echo $data['NamaJabatan']; ?></h3>
        </td>
      </tr>
      <tr>
        <td colspan="2">
            <?php 
              $number = 1;
              $q=mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE JabatanID='$data[JabatanID]'");
              while ($do_act=mysqli_fetch_array($q)) {?>
              <?php echo $number++; ?> .
              <?php echo $do_act['Nama']; ?> <br>
            <?php } ?>
        </td>
      </tr>
      <?php } ?>
  </table>
<?php
  $cetakan = ob_get_contents(); 
  ob_end_clean();   
  $mpdf->writeHTML(utf8_encode($cetakan));
  $mpdf->output($pdf.".pdf","I");
  exit;
?>