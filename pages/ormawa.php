<div class="col-lg-12">
    <div class="panel panel-color panel-warning">
        <div class="panel-heading"> 
            <h3 class="panel-title">Data UKM</h3> 
        </div> 
        <div class="panel-body"> 
        	<?php include 'aksi/lib_ormawa.php'; ?>
			<button class="btn btn-danger" data-toggle="modal" data-target="#myModal">
			  <i class="ion-ios7-plus"></i> Tambah User UKM
			</button>
			<!-- <button class="btn btn-info">
			  <i class="glyphicon glyphicon-print"></i> Print Data
			</button> --><br><br>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">Tambah Data UKM</h4>
			      </div>
			      <div class="modal-body">
			       	<form role="form" action="" method="POST">
			          <div class="form-group">
			            <label for="exampleInputEmail1">Nama UKM</label>
			            <input type="text" name="NamaOrmawa" class="form-control span5"  placeholder="Nama Ormawa">
			          </div>
			          <div class="form-group">
			            <label for="exampleInputEmail1">Penanggun Jawab</label>
			            <input type="text" name="PenanggungJawab" class="form-control span5" id="exampleInputEmail1" placeholder="Penanggung Jawab">
			          </div>
			          <div class="form-group">
			            <label for="exampleInputEmail1">Pembina</label>
			                 <select class="form-control" name="PimpinanID" id="exampleInputEmail1">
	          <option value="">--Pilih Pembina--</option>
		        <?php
			        $r = mysqli_query($koneksi,"SELECT * FROM Pimpinan"); 
			        while ($d=mysqli_fetch_array($r)) {
			        	echo "<option value='$d[PimpinanID]'>".$d['Nama']."</option>";
			        }
			     ?>  
		    </select>
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
			        <button type="submit" name="SimpanOrmawa" class="btn btn-danger">Simpan</button>
			      </form>
		        </div>
		      </div>
		  </div>
	  </div>
           <table  id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="1%">No</th>
                    <th>Nama UKM</th>
                    <th>Penanggung Jawab</th>
                      <th>Pembina</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>NA</th>
                    
                </tr>
            </thead>
            <tbody>
            	<?php
				 $OrmawaID = $_SESSION['OrmawaID'];
				 $Nama = $_SESSION['Nama'];
		          $no =1;
		          $result = mysqli_query($koneksi,"SELECT * FROM ormawa as a 
          						 LEFT JOIN pimpinan as b
          						 ON a.PimpinanID = b.PimpinanID"); 
		          while ($data=mysqli_fetch_array($result))
				  {
		        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td>
			            <a href="?page=detail_ormawa&user=active&OrmawaID=<?php echo $data['OrmawaID']; ?>&Akun=active" class="btn btn-info btn-sm">
						  <i class="ion-clock"></i> Detail UKM
						</a>
                    	<?php echo $data['NamaOrmawa']; ?></td>
                    <td><?php echo $data['PenanggungJawab']; ?></td> 
                    <td><?php echo $data['Nama']; ?></td>
                    <td><?php echo $data['Username']; ?></td>
                    <td><?php echo $data['Password']; ?></td>
                    
                    <td>
                    	<?php 
                    	if ($data['NA']=='A') {?>
                    		<a href="?page=ormawa&user=active&OrmawaID=<?php echo $data['OrmawaID']; ?>&NA=N" class="btn btn-primary btn-sm"><i class="ion-android-checkmark"></i></a>
                    	<?php }else{?>
                    		<a href="?page=ormawa&user=active&OrmawaID=<?php echo $data['OrmawaID']; ?>&NA=A" class="btn btn-danger btn-sm"><i class="ion-android-close"></i></a>
                    		
                    	<?php } ?>
                    </td>
                </tr>  
               	<?php } ?>       
            </tbody>
        </table>
  </div> 
    </div>