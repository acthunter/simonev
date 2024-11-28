<?php 
$OrmawaID = $_GET['OrmawaID'];
include 'aksi/lib_mahasiswa.php';
?>
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
  <i class="glyphicon glyphicon-plus"></i> Tambah Mahasiswa
</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form role="form" action="" method="POST">
		<input type="hidden" name="OrmawaID" value="<?php echo $data['OrmawaID']; ?>" placeholder="">
	     <div class="form-group">
	        <label for="exampleInputEmail1">NIM </label>
	        <input type="text" name="NIM" class="form-control span5"  placeholder="NIM">
	      </div>
	     <div class="form-group">
	        <label for="exampleInputEmail1">Nama Mahasiswa</label>
	        <input type="text" name="Nama" class="form-control span5"  placeholder="Nama Mahasiswa">
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Tahun Angkatan</label>
	        <input type="text" name="TahunAngkatan" class="form-control span5"  placeholder="Tahun Angkatan">
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Tahun Periode</label>
	        <input type="text" name="TahunPeriode" class="form-control span5"  placeholder="Tahun Periode">
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Jabatan Organisasi</label>
	        <select class="form-control" name="JabatanID" id="exampleInputEmail1">
	          <option value="">--Jabatan Organisasi--</option>
		        <?php
			        $r = mysqli_query($koneksi,"SELECT * FROM jabatan WHERE OrmawaID='$OrmawaID'"); 
			        while ($d=mysqli_fetch_array($r)) {
			        	echo "<option value='$d[JabatanID]'>".$d['NamaJabatan']."</option>";
			        }
			     ?>  
		    </select>
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Fakultas</label>
	        <select class="form-control" name="Fakultas" id="exampleInputEmail1">
	          <option value="">--Pilih Fakultas</option>
	          <option value="FILKOM">Fakultas Ilmu Komputer</option>
	          <option value="FEKON">Fakultas Ekonomi & Bisnis</option>
	          <option value="FPSIK">Fakultas Psikologi</option>
	          <option value="FKIP">Fakultas Keguruan Ilmu Pendidikan</option>
              <option value="FDKV">Fakultas Desain Komunikasi Visual</option>
              <option value="FT">Fakultas Teknik</option>
              </select>
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Status</label>
	        <select class="form-control" name="NA" id="exampleInputEmail1">
	          <option value="">--Pilih Status</option>
	          <option value="A" <?php if ($data['NA']=='A'){echo "selected";}?>>Aktif</option>
	          <option value="N" <?php if ($data['NA']=='N'){echo "selected";}?>>Non Aktif</option>
	        </select>
	      </div>
          </div>
	      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="SimpanMhs" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
  </div>
<br><br>
<table class="table">
	<thead>
		<tr>
			<th width="7%">Nim</th>
			<th>Nama</th>
			<th>Fakultas</th>
			<th>Jabatan Organisasi</th>
			<th>Tahun Angkatan</th>
			<th>Tahun Periode</th>
			<th>NA</th>
		</tr>
	</thead>
	<tbody>
		<?php
          $result = mysqli_query($koneksi,"SELECT * FROM mahasiswa as a
          						 LEFT JOIN jabatan as b
          						 ON a.JabatanID = b.JabatanID
          						 WHERE a.OrmawaID = '$OrmawaID'
          						"); 
          while ($data=mysqli_fetch_array($result)) {
        ?>
		<tr>
			<td><?php echo $data['NIM']; ?></td>
			<td>
<?php if ($_SESSION['LevelID']=='3') {?>
<!-- Button trigger modal -->
<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php echo $data['NIM']; ?>">
 	<i class="ion-edit"></i>
</button>
<?php }?>
<?php echo $data['Nama']; ?>
<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $data['NIM']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Data Mahasiswa</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="" method="POST">
        <input type="hidden" name="MahasiswaID" value="<?php echo $data['MahasiswaID']; ?>" placeholder="">
		<input type="hidden" name="OrmawaID" value="<?php echo $data['OrmawaID']; ?>" placeholder="">
	     <div class="form-group">
	        <label for="exampleInputEmail1">NIM </label>
	        <input type="text" value="<?php echo $data['NIM']; ?>" name="NIM" class="form-control span5"  placeholder="NIM">
	      </div>
	     <div class="form-group">
	        <label for="exampleInputEmail1">Nama Mahasiswa</label>
	        <input type="text" value="<?php echo $data['Nama']; ?>" name="Nama" class="form-control span5"  placeholder="Nama Mahasiswa">
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Tahun Angkatan</label>
	        <input type="text"  value="<?php echo $data['TahunAngkatan']; ?>" name="TahunAngkatan" class="form-control span5"  placeholder="Tahun Angkatan">
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Tahun Periode</label>
	        <input type="text" name="TahunPeriode" value="<?php echo $data['TahunPeriode']; ?>" class="form-control span5"  placeholder="Tahun Periode">
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Jabatan Organisasi</label>
	        <select class="form-control" name="JabatanID" id="exampleInputEmail1">
	          <option value="">--Jabatan Organisasi--</option>
		        <?php
			        $r = mysqli_query($koneksi,"SELECT * FROM jabatan WHERE OrmawaID='$OrmawaID'"); 
			        while ($d=mysqli_fetch_array($r)) {?>
			        <option value='<?php echo $d[JabatanID]; ?>' <?php if ($d['JabatanID']==$data['JabatanID']) {echo "selected";} ?>><?php echo  $d['NamaJabatan']; ?></option>";
			    <?php  }?>  
			 </select>
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Fakultas</label>
	        <select class="form-control" name="Fakultas" id="exampleInputEmail1">
	          <option value="">--Pilih Fakultas</option>
	          <option value="FILKOM" <?php if ($data['Fakultas']=="FILKOM") {echo "selected";} ?>>Fakultas Ilmu Komputer</option>
	          <option value="FEKON" <?php if ($data['Fakultas']=="FEKON") {echo "selected";} ?>>Fakultas Ekonomi & Bisnis</option>
	          <option value="FPSIK" <?php if ($data['Fakultas']=="FPSIK") {echo "selected";} ?>>Fakultas Psikologi</option>
	          <option value="FKIP" <?php if ($data['Fakultas']=="FKIP") {echo "selected";} ?>>Fakultas Keguruan Ilmu Pendidikan</option>
	          <option value="FDKV" <?php if ($data['Fakultas']=="FDKV") {echo "selected";} ?>>Fakultas Desain Komunikasi Visual</option>
	          <option value="FT" <?php if ($data['Fakultas']=="FT") {echo "selected";} ?>>Fakultas Teknik</option>
	        </select>
	      </div>
	      <div class="form-group">
	        <label for="exampleInputEmail1">Status</label>
	        <select class="form-control" name="NA" id="exampleInputEmail1">
	          <option value="">--Pilih Status</option>
	          <option value="A" <?php if ($data['NA']=='A'){echo "selected";}?>>Aktif</option>
	          <option value="N" <?php if ($data['NA']=='N'){echo "selected";}?>>Non Aktif</option>
	        </select>
	      </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="UpdateMHS" class="btn btn-primary">Update Data</button>
    </form>
      </div>
    </div>
  </div>
</div>





			</td>
			<td><?php echo $data['Fakultas']; ?></td>
			<td><?php echo $data['NamaJabatan']; ?></td>
			<td><?php echo $data['TahunAngkatan']; ?></td>
			<td><?php echo $data['TahunPeriode']; ?></td>
			<td>
				   <?php 
	            	if ($data['NA']=='A') {?>
	            		<a href="?page=detail_ormawa&user=active&OrmawaID=<?php echo $_GET['OrmawaID']; ?>&MahasiswaID=<?php echo $data['MahasiswaID']; ?>&NAM=N" class="btn btn-primary btn-sm"><i class="ion-android-checkmark"></i></a>
	            	<?php }else{?>
	            		<a href="?page=detail_ormawa&user=active&OrmawaID=<?php echo $_GET['OrmawaID']; ?>&MahasiswaID=<?php echo $data['MahasiswaID']; ?>&NAM=A" class="btn btn-danger btn-sm"><i class="ion-android-close"></i></a>
	            		
	            	<?php } ?>
			</td>
			<?php } ?>
		</tr>
	</tbody>
</table>