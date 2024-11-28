<div class="col-lg-12">
    <div class="panel panel-color panel-inverse">
        <div class="panel-heading"> 
            <h3 class="panel-title">Data UKM</h3> 
        </div> 
        <div class="panel-body"> 
          
            <thead>
               
            </thead>
            <tbody>
            	<?php
                 $OrmawaID = $_SESSION['OrmawaID'];
		      
		          $result = mysqli_query($koneksi,"SELECT * FROM ormawa WHERE OrmawaID ='$OrmawaID'"); 
		          while ($data=mysqli_fetch_array($result)) {
		        ?>
                <tr>
                    
                    <td>
			            <a href="?page=detail_ormawalpj&user=active&OrmawaID=<?php echo $data['OrmawaID']; ?>&Akun=active" class="btn btn-info btn-sm">
						  <i class="ion-edit"></i> Lihat LPJ
			      </a>
                    	<?php echo $data['NamaOrmawa']; ?></td>
            </tr>  
               	<?php } ?>       
            </tbody>
        </table>
        <?php echo $no++; ?> </div> 
    </div>
</div>