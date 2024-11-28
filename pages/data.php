<div class="col-lg-12">
    <div class="panel panel-color panel-inverse">
        <div class="panel-heading"> 
            <h3 class="panel-title">Data UKM</h3> 
        </div> 
        <div class="panel-body"> 
           <table  id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="1%">No</th>
                    <th>Nama UKM</th>
                    <th>Penanggung Jawab</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>NA</th>
                </tr>
            </thead>
            <tbody>
            	<?php
                 $OrmawaID = $_SESSION['OrmawaID'];
		          $no =1;
		          $result = mysqli_query($koneksi,"SELECT * FROM ormawa WHERE OrmawaID ='$OrmawaID'"); 
		          while ($data=mysqli_fetch_array($result)) {
		        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td>
			            <a href="?page=detail_ormawa&user=active&OrmawaID=<?php echo $data['OrmawaID']; ?>&Akun=active" class="btn btn-info btn-sm">
						  <i class="ion-edit"></i> Detail UKM
						</a>
                    	<?php echo $data['NamaOrmawa']; ?></td>
                    <td><?php echo $data['PenanggungJawab']; ?></td>
                    <td><?php echo $data['Username']; ?></td>
                    <td><?php echo $data['Password']; ?></td>
                    <td>
                    	<?php 
                    	if ($data['NA']=='A') {?>
                    		<span  class="label label-success"><i class="ion-android-checkmark"></i> Status Aktif</span>
                    	<?php }else{?>
                    		<span class="label label-danger"><i class="ion-android-close"></i> Status Non Aktif</span>
                    		
                    	<?php } ?>
                    </td>
                </tr>  
               	<?php } ?>       
            </tbody>
        </table>
        </div> 
    </div>
</div>