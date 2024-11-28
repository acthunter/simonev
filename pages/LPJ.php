<?php 
$OrmawaID = $_GET['OrmawaID'];
include 'aksi/lib_lpj.php';
?>
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
  <i class="glyphicon glyphicon-plus"></i> Tambah LPJ
</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form role="form" action="" method="post">
      <input type="hidden" name="OrmawaID" value="<?php echo $_GET['OrmawaID']; ?>" placeholder="" />
      <div class="form-group">
        <label for="exampleInputEmail2">Program Kerja</label>
        <select class="form-control" name="ProkerID" id="exampleInputEmail1">
	          <option value="">--Pilih Proker--</option>
		        <?php
			        $r = mysqli_query($koneksi,"SELECT * FROM proker WHERE OrmawaID='$OrmawaID'"); 
			        while ($d=mysqli_fetch_array($r)) {
			        	echo "<option value='$d[ProkerID]'>".$d['ProgramKerja']."</option>";
			        }
			     ?>  
		    </select>
      </div>
      <div class="form-group">
        </div>
      <div class="form-group">
        <label for="exampleInputEmail2">Upload LPJ</label>
        <input type="file" name="dokumen" class="form-control span5" />
      </div>
      </div>
      <div class="modal-footer">
      <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" name="SimpanLpj" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
  </div>
<br><br>
<table class="table">
	<thead>
		<tr>
			<th width="7%">No</th>
			<th>Program Kerja</th>
			<th>Download LPJ</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
				 $OrmawaID = $_SESSION['OrmawaID'];
				 $OrmawaID = $_GET['OrmawaID']; 
				  $Nama = $_SESSION['Nama'];
				  $no =1;
		          $result = mysqli_query($koneksi,"SELECT * FROM proker WHERE OrmawaID='$OrmawaID' and up='OK'");
		          while ($data=mysqli_fetch_array($result))
				  {
		        ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['ProgramKerja']; ?></td>
                    <td>
											<a href="file/<?php echo $data['dokumen'];?>" target="_blank" class="btn btn-info"><i class="ion-eye"></i>  Download</a>
										</td>
                </tr>  
               	<?php } ?>       
            </tbody>
	</tbody>
</table>