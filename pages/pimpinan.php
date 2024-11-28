<div class="col-lg-12">
    <div class="panel panel-color panel-danger">
        <div class="panel-heading"> 
            <h3 class="panel-title">Data Pembina</h3> 
        </div> 
        <div class="panel-body"> 
        	<?php include 'aksi/lib_pimpinan.php'; ?>
        	<?php if ($LevelID=='1') {?>
			<button class="btn btn-success" data-toggle="modal" data-target="#myModal">
			  <i class="ion-ios7-plus"></i> Tambah User Pembina
			</button>
			<?php  } ?>
			<!-- <button class="btn btn-info">
			  <i class="ion-ios7-printer"></i> Print Data
			</button> --><br><br>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">Tambah Data Pembina</h4>
			      </div>
			      <div class="modal-body">
			       	<form role="form" action="" method="POST">
			          <div class="form-group">
			            <label for="exampleInputEmail1">NIP</label>
			            <input type="text" name="NIP" class="form-control span5"  placeholder="NIP">
			          </div>
			          <div class="form-group">
			            <label for="exampleInputEmail1">Nama</label>
			            <input type="text" name="Nama" class="form-control span5" id="exampleInputEmail1" placeholder="Nama">
			          </div>
			         
			           <div class="form-group">
			            <label for="exampleInputEmail1">Username</label>
			            <input type="text" name="Username" class="form-control span5" id="exampleInputEmail1" placeholder="Username">
			          </div>
			           <div class="form-group">
			            <label for="exampleInputEmail1">Password</label>
			            <input type="text" name="Password" class="form-control span5" id="exampleInputEmail1" placeholder="Password">
			          </div>
			           <div class="form-group">
			            <label for="exampleInputEmail1">Status</label>
			            <select class="form-control" name="NA" id="exampleInputEmail1">
			              <option value="">--Pilih Status</option>
			              <option value="A">Aktif</option>
			              <option value="N">Non Aktif</option>
			            </select>
			          </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
			        <button type="submit" name="SimpanPimpinan" class="btn btn-danger">Simpan</button>
			      </form>
			      </div>
			    </div>
			  </div>
			</div>
           <table  id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="1%">No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>NA</th>
                   </tr>
            </thead>
            <tbody>
            	<?php
		          $no =1;
		          $PimpinanID = $_SESSION['PimpinanID'];
		          if ($LevelID=='3') {
		          	$result = mysqli_query($koneksi,"SELECT * FROM pimpinan WHERE PimpinanID='$PimpinanID'");
		          }else{
		            $result = mysqli_query($koneksi,"SELECT * FROM pimpinan"); 
		          }
		          while ($data=mysqli_fetch_array($result)) {
		        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td>
			            <a href="?page=edit_pimpinan&&user=active&PimpinanID=<?php echo $data['PimpinanID']; ?>" class="btn btn-info btn-sm">
						  <i class="ion-edit"></i>
						</a>
                    	<?php echo $data['NIPY']; ?></td>
                    <td><?php echo $data['Nama']; ?></td>
                    <td><?php echo $data['Username']; ?></td>
                    <td><?php echo $data['Password']; ?></td>
                    <td>
                    	<?php 
                    	if ($data['NA']=='N') {?>
                    		<a href="?page=pimpinan&user=active&PimpinanID=<?php echo $data['PimpinanID']; ?>&NA=A" class="btn btn-danger btn-sm"><i class="ion-android-close"></i></a>
                    	<?php }else{?>
                    		<a href="?page=pimpinan&user=active&PimpinanID=<?php echo $data['PimpinanID']; ?>&NA=N" class="btn btn-primary btn-sm"><i class="ion-android-checkmark"></i></a>
                    	<?php } ?>
                    </td>
                  </tr>  
               	<?php } ?>       
            </tbody>
        </table>
        </div> 
    </div>
</div>