<p>Total anggaran dana yang disetujui</p>
<table class="table table-striped table-bordered">
  <thead>
        <tr>
            <th width="1%">No</th>
            <th>Program Kerja</th>
            <th>Tanggal Pelaksanaan</th>
            <th>Anggaran</th>
        </tr>
    </thead>
    <tbody>
      <?php
        $OrmawaID=$_GET['OrmawaID'];
        $no =1;
		$result = mysqli_query($koneksi,"SELECT * FROM proker WHERE OrmawaID='$OrmawaID' AND NA = 'A'"); 
        while ($data=mysqli_fetch_array($result)) {
        $Jumlah = $data['Jumlah'];
      ?>
      <tr>
        <td><?php  echo $no++;?></td>
        <td>

      <?php  echo $data['ProgramKerja'];?></td>
        <td><?php  echo $data['TanggalPelaksanaan'];?></td>
        <td><?php  echo $data['Anggaran'];?></td>
      </tr>
    
      
        <?php } ?>
    </tbody>
    <tbody>
      <?php
        $OrmawaID=$_GET['OrmawaID'];
        $no =1;
		$result = mysqli_query($koneksi,"SELECT ProgramKerja,TanggalPelaksanaan,Anggaran,SUM(Anggaran) as Jumlah FROM proker WHERE OrmawaID='$OrmawaID' AND NA = 'A'"); 
        while ($data=mysqli_fetch_array($result)) {
        $Jumlah = $data['Jumlah'];
      ?>
        <td colspan="3">TOTAL</td>
        <td>Rp. <?php  echo $Jumlah;?></td>
      </tr>
        <?php } ?>
    </tbody>
    
</table>
<input type="submit" name="proses" onclick="window.print();" class="noprint" id="proses" value="Print">