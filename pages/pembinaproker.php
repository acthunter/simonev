<div class="col-lg-12">
    <div class="panel panel-color panel-success">
        <div class="panel-heading"> 
            <h3 class="panel-title">Daftar Proker UKM UPI YPTK PADANG</h3> 
        </div> 
        <div class="panel-body">
        
        <table id="datatable" class="table table-striped table-bordered">
		    <thead>
		        <tr>
		            <th width="1%">No</th>
		            <th>UKM</th>
		            <th>Program Kerja</th>
		            <th>Tanggal Pelaksanaan</th>
                    <th>Download Proposal</th>
                    <th>Download LPJ</th>
		            <th>Anggaran</th>
		            <th>Pelaksanaan</th>
		        </tr>
		    </thead>
		    <tbody>
		      <?php
		      	date_default_timezone_set("Asia/Jakarta");
		      	$tgl_sekarang = date('Y-m-d');
		        $no =1;
		        $result = mysqli_query($koneksi,"SELECT * FROM proker as a
		        					   LEFT JOIN ormawa as b
		        					   ON a.OrmawaID = b.OrmawaID WHERE PimpinanID='$PimpinanID'"); 
		        while ($data=mysqli_fetch_array($result)) {
		        if ($tgl_sekarang > $data['TanggalPelaksanaan']){
		        	$class= "class='danger'";
		        	$pelaksanaan = "<span class='label label-danger'>Sudah Terlaksana</span>";
		        }else{
		        	$pelaksanaan = "<span class='label label-purple'>Belum Terlaksana</span>";
		        }
		      ?>
		      <tr <?php if($tgl_sekarang>$data['TanggalPelaksanaan']){echo "class='danger'";} ?>>
		        <td><?php  echo $no++;?></td>
		        <td>
		        	 <button type="button" class="btn btn-info btn-sm" onclick="window.open('comment.php?ProkerID=<?php echo $data['ProkerID']; ?>', 'name', 'width=900,height=600')">
			            <i class="glyphicon glyphicon glyphicon-comment"></i>&nbsp 
			            <span class="badge">
			              <?php 
			                $total = mysqli_query($koneksi,"SELECT count(KomentarID) as Jumlah FROM komentar WHERE ProkerID='$data[ProkerID]'"); 
			                $do_act = mysqli_fetch_array($total);
			                echo $do_act['Jumlah'];
			              ?>
			            </span>
			          </button>
		        	<?php  echo $data['NamaOrmawa'];?></td>
		        <td><?php  echo $data['ProgramKerja'];?></td>
		        <td><?php  echo $data['TanggalPelaksanaan'];?></td>                <td class="text-center">
                 <?php 
                if ($data['dokumen']=='') {?>
        <span class="label label-danger" data-toggle="modal" data-target="#myModal5<?php echo $data['ProkerID']; ?>">
           <i class="ion-android-close"></i>  Belum Upload</span>
          <div aria-hidden="true">
          <?php }else{ ?>
           <a class="label label-success" data-toggle="modal"  href="file/<?php echo $data['dokumen'];?>" target="_blank">
           <i class="ion-eye"></i>  Download</span>
          <div class="modal fade" id="myModal5<?php echo $data['ProkerID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModal5" aria-hidden="true">
          <?php }
			?>
									
										</td>
                <td>
										     <?php 
                if ($data['lpj']=='') {?>
        <span class="label label-danger" data-toggle="modal">
           <i class="ion-android-close"></i>  Belum Upload</span>
          <div aria-hidden="true">
          <?php }else{ ?>
           <a class="label label-success" data-toggle="modal"  href="file/<?php echo $data['lpj'];?>" target="_blank">
           <i class="ion-eye"></i>  Download</span>
          <div class="modal fade" id="myModal5<?php echo $data['ProkerID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModal5" aria-hidden="true">
          <?php }
			?></td>
		        <td><?php  echo $data['Anggaran'];?></td>
		        <td><?php  echo $pelaksanaan;?></td>
		      </tr>
		      <?php } ?>
		    </tbody>
		</table>
        </div>
     </div>
</div>