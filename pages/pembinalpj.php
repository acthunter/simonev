<div class="col-lg-12">
    <div class="panel panel-color panel-inverse">
        <div class="panel-heading"> 
            <h3 class="panel-title">Data LPJ UKM</h3> 
        </div> 
           <table  >
            <thead>
                <tr>
                    <th>   .</th>
                   
                </tr>
            </thead>
            <tbody>
            	<?php
                 $OrmawaID = $_SESSION['OrmawaID'];
				   $PimpinanID = $_SESSION['PimpinanID'];
		            if ($LevelID=='3') {
		          	$result = mysqli_query($koneksi,"SELECT * FROM ormawa WHERE PimpinanID='$PimpinanID'");
		          }else{
		            $result = mysqli_query($koneksi,"SELECT * FROM Ormawa"); 
		          }
		          while ($data=mysqli_fetch_array($result)) {
		        ?>
                <tr>
                    <td>
			            <a href="?page=detail_ormawalpj&user=active&OrmawaID=<?php echo $data['OrmawaID']; ?>&Akun=active" class="btn btn-info btn-sm">
						  <i class="ion-edit"></i> Detail LPJ UKM
						</a>
                    	<?php echo $data['NamaOrmawa']; ?></td>
                 
                    </td>
                </tr>  
               	<?php } ?>       
            </tbody>
        </table>
        </div> 
    </div>
</div>