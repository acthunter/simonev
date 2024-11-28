<div class="col-lg-12">
    <div class="panel panel-color panel-danger">
        <div class="panel-heading"> 
            <h3 class="panel-title">Daftar Mahasiswa UPI YPTK PADANG yang Aktif di Organisasi</h3> 
        </div> 
        <div class="panel-body"> 
        	<table id="datatable" class="table">
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
			          $result = mysqli_query($koneksi,"SELECT * FROM mahasiswa A
			          						 LEFT JOIN ormawa B    			          						 ON A.OrmawaID = B.OrmawaID
WHERE PimpinanID='$PimpinanID'			          						"); 
			          while ($data=mysqli_fetch_array($result)) {
			        ?>
					<tr>
						<td><?php echo $data['NIM']; ?></td>
						<td><?php echo $data['Nama']; ?></td>
						<td><?php echo $data['Fakultas']; ?></td>
						<td><?php echo $data['Jabat']; ?></td>
						<td><?php echo $data['TahunAngkatan']; ?></td>
						<td><?php echo $data['TahunPeriode']; ?></td>
						<td>
							<?php 
			            	if ($data['NA']=='A') {?>
			            		<span class="label label-success"><i class="ion-android-checkmark"></i> Mahasiswa Aktif</span>
			            	<?php }else{?>
			            		<a class="label label-danger"><i class="ion-android-close"></i> Mahasiswa Non Aktif</a>
			            	<?php } ?>

						</td>
					</tr>
					<?php } ?>
				</table>
		</div>
     </div>
</div>