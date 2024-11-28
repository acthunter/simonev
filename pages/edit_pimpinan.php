<?php
  $PimpinanID = $_GET['PimpinanID'];
  $result = mysqli_query($koneksi,"SELECT * FROM pimpinan WHERE PimpinanID='$PimpinanID'"); 
  $data=mysqli_fetch_array($result);
?>
<div class="col-lg-12">
    <div class="panel panel-color panel-danger">
        <div class="panel-heading"> 
            <h3 class="panel-title">Data Pembina</h3> 
        </div> 
        <div class="panel-body"> 
       	<?php include 'aksi/lib_pimpinan.php'; ?>
       	<form role="form" action="" method="POST">
       	  <input type="hidden" name="PimpinanID" value="<?php echo $PimpinanID; ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">NIPY</label>
            <input type="text" name="NIPY" value="<?php echo $data['NIPY']; ?>" class="form-control span5"  placeholder="NIPY">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>" class="form-control span5" id="exampleInputEmail1" placeholder="Nama">
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="Username" value="<?php echo $data['Username']; ?>"class="form-control span5" id="exampleInputEmail1" placeholder="Username">
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="text" name="Password"  value="<?php echo $data['Password']; ?>" class="form-control span5" id="exampleInputEmail1" placeholder="Password">
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select class="form-control" name="NA" id="exampleInputEmail1">
              <option value="">--Pilih Status</option>
              <option value="A" <?php if ($data['NA']=='A'){echo "selected";}?>>Aktif</option>
              <option value="N" <?php if ($data['NA']=='N'){echo "selected";}?>>Non Aktif</option>
            </select>
          </div>
         <center>
        <button type="submit" name="EditPimpinan" class="btn btn-primary btn-lg">Edit Data</button>
        <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Kembali</button>
        </center>
	</div>
</div>
			