<?php
 include "../config/koneksi.php"; 
?>
  <h1>Daftar Proker Ormawa Unipdu</h1>
<hr>
<style type="text/css">
table{
  border-collapse: collapse;
  width: 100%;
}
table,th,td{
  border:1px solid black;
}
table{
  font-size: 20px;
}
</style>
 <table border="1">
    <thead>
        <tr>
            <th width="1%">No</th>
            <th>Program Kerja</th>
            <th>Tanggal Pelaksanaan</th>
            <th>Anggaran</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
      <?php
        $OrmawaID = $_GET['OrmawaID'];
        $no =1;
        $result = mysqli_query($koneksi,"SELECT * FROM proker WHERE OrmawaID='$OrmawaID'"); 
        while ($data=mysqli_fetch_array($result)) {
      ?>
      <tr>
        <td><?php  echo $no++;?></td>
        <td>
          <h3><?php  echo $data['ProgramKerja'];?></h3><hr>
          <table style="border:non;width:100%;">
            <?php
$numb = 1;
$q= mysqli_query($koneksi,"SELECT * FROM komentar WHERE ProkerID = '$data[ProkerID]'");
while ($do_act= mysqli_fetch_array($q)) {?>
            <tr>
              <td><b>Dari</b> :<i>BAkm</i>  </td>
              <td><?php echo $do_act['Komentar']; ?></td>
            </tr>
<?php } ?>
          </table>
        </td>
        <td><?php  echo $data['TanggalPelaksanaan'];?></td>
        <td><?php  echo $data['Anggaran'];?></td>
        <td><?php  echo $data['NA'];?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
<?php
  $cetakan = ob_get_contents(); 
  ob_end_clean();   
  $mpdf->writeHTML(utf8_encode($cetakan));
  $mpdf->output($pdf.".pdf","I");
  exit;
?>