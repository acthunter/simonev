<div class="col-lg-12">
    <div class="panel panel-color panel-warning">
        <div class="panel-heading"> 
            <h3 class="panel-title">Data LPJ UKM</h3> 
        </div> 
        <div class="panel-body"> 
        	<?php include 'aksi/lib_ormawa.php'; ?>
			
			 <br><br>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			       
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
			            <a href="?page=detail_ormawalpj&user=active&OrmawaID=<?php echo $data['OrmawaID']; ?>&Akun=active" class="btn btn-info btn-sm">
						  <i class="ion-edit"></i> Detail LPJ UKM
						</a>
                    	<?php echo $data['NamaOrmawa']; ?></td>
                   
                </tr>  
               	<?php } ?>       
            </tbody>
        </table>
  </div> 
    </div>