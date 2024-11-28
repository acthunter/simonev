

<!-- Button trigger modal -->


<?php 
$LevelID = $_SESSION['LevelID'];
$link = 'http://'.$_SERVER[HTTP_HOST];
$file   = $_POST['file'];
include 'aksi/lib_proker.php';
include '../upload.php';
 $ProkerID=  $_GET['ProkerID'];
 $result = mysqli_query($koneksi,"SELECT * FROM proker WHERE ProkerID='$ProkerID'"); 
 $data=mysqli_fetch_array($result);
 $Foto = $data['Foto'];
?>
<div class="text" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
           
            <h4 class="modal-title" id="myModalLabel">Tambah Program Kerja</h4>
          </div>
          <div class="modal-body">
           <form role="form" action="" method="POST">
            <input type="hidden" name="OrmawaID" value="<?php echo $_GET['OrmawaID']; ?>" placeholder="">
            <div class="form-group">
               <label for="exampleInputEmail1">Program Kerja</label>
                <textarea name="ProgramKerja" placeholder="Program Kerja" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Pelaksanaan</label>
                <input type="date" name="TanggalPelaksanaan" placeholder="yyyy-mm-dd / 2016-17-01" class="form-control span5">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Anggaran</label>
                <input type="text" class="form-control" name="Anggaran" placeholder="Anggaran">
            </div><!-- input-group -->
             <div class="form-group">
                <label for="exampleInputEmail1">Penanggung Jawab</label>
                <input type="text" name="PenanggungJawab" placeholder="Penanggung Jawab" class="form-control span5">
            </div>          
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="SimpanProker" class="btn btn-primary">Simpan</button>
    </form>
          </div>
           </div>
       </div>
     </div>
</div><br>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th width="1%">No</th>
            <th>Program Kerja</th>
            <th>Tanggal Pelaksanaan</th>
            <th>Anggaran</th>
            <th>Pelaksanaan</th>
            <th>Penanggung Jawab</th>
            <th>Upload Proposal</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
      <?php
        date_default_timezone_set("Asia/Jakarta");
        $tgl_sekarang = date('Y-m-d');
        $OrmawaID = $_GET['OrmawaID'];
        $no =1;
        $result = mysqli_query($koneksi,"SELECT * FROM proker WHERE OrmawaID='$OrmawaID'"); 
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
          <button class="btn btn-purple btn-sm" data-toggle="modal" data-target="#myModal1<?php echo $data['ProkerID']; ?>">
           <i class="ion-edit"></i>
          </button>

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

          <div class="modal fade" id="myModal1<?php echo $data['ProkerID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Edit Proker</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="" method="POST">
                    <input type="hidden" name="ProkerID" value="<?php echo $data['ProkerID']; ?>" placeholder="">
                    <div class="form-group">
                       <label for="exampleInputEmail1">Program Kerja</label>
                        <textarea class="form-control" name="ProgramKerja" value="<?php echo $data['ProgramKerja']; ?>"><?php echo $data['ProgramKerja']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Pelaksanaan</label>
                        <input type="date"  value="<?php echo $data['TanggalPelaksanaan']; ?>" name="TanggalPelaksanaan" placeholder="yyyy-mm-dd / 2016-17-01" class="form-control span5">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Anggaran</label>
                        <input type="text"  value="<?php echo $data['Anggaran']; ?>" class="form-control" name="Anggaran" placeholder="Anggaran">
                    </div><!-- input-group -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Penanggung Jawab</label>
                    <input type="text" name="PenanggungJawab" value="<?php echo $data['PenanggungJawab'];?>" placeholder="Penanggung Jawab" class="form-control span5">
                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                  <button type="submit" name="UpdateProker" class="btn btn-primary">Update</button>
                </form>
                </div>
              </div>
            </div>
          </div>

          <?php  
          echo $data['ProgramKerja'];?></td>
        <td><?php  echo $data['TanggalPelaksanaan'];?></td>
        <td><?php  echo $data['Anggaran'];?></td>
        <td><?php  echo $pelaksanaan; ?></td>
        <td><?php  echo $data['PenanggungJawab']; ?></td>
        <td>
        
           
        <?php 
                if ($data['NA']=='N') {?>
        <a class="label label-danger" data-toggle="modal"  >
           <i class=""></i>  Belum Di Setujui</span>
          <div class="modal fade" id="myModal5<?php echo $data['ProkerID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModal5" aria-hidden="true">
          <?php }elseif ($data['dokumen']=='') {?>
        <span class="label label-danger" data-toggle="modal" data-target="#myModal5<?php echo $data['ProkerID']; ?>">
           <i class="ion-android-close"></i>  Belum Upload</span>
          <div class="modal fade" id="myModal5<?php echo $data['ProkerID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModal5" aria-hidden="true">
          <?php }else{ ?>
           <a class="label label-success" data-toggle="modal"  href="file/<?php echo $data['dokumen'];?>" target="_blank">
           <i class="ion-eye"></i>  Download</span>
          <div class="modal fade" id="myModal5<?php echo $data['ProkerID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModal5" aria-hidden="true">
          <?php }
			?>
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Upload Proposal</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="" method="POST">
                    <input type="hidden" name="OrmawaID" value="<?php echo $data['OrmawaID']; ?>" placeholder="">
                    <input type="hidden" name="ProkerID" value="<?php echo $data['ProkerID']; ?>" placeholder="">
                   
                    <div class="form-group">
                    <input type="file" name="dokumen" id="dokumen">
                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  <button type="submit" name="UpdateProposal" class="btn btn-primary">Simpan</button>
                </form>
                </div>
              </div>
            </div>
          </div>

          <?php  
         ?></td>
        </td>
        <td>
        <?php if ($LevelID=='1' OR $LevelID=='3') {?>
                <?php 
                if ($data['NA']=='A') {?>
                  <a href="?page=detail_ormawa&user=active&OrmawaID=<?php echo $data['OrmawaID']; ?>&ProkerID=<?php echo $data['ProkerID']; ?>&NAP=N" class="btn btn-primary btn-sm"><i class="ion-android-checkmark"></i> Disetujui</a>
                <?php }else{?>
                  <a href="?page=detail_ormawa&user=active&OrmawaID=<?php echo $data['OrmawaID']; ?>&ProkerID=<?php echo $data['ProkerID']; ?>&NAP=A" class="btn btn-danger btn-sm"><i class="ion-android-close"></i> Tidak Disetujui</a>
                <?php } ?>
        <?php }else{ ?>
              <?php 
                if ($data['NA']=='A') {?>
                  <span class="label label-primary"><i class="ion-android-checkmark"></i>Disetujui </span>
                <?php }elseif ($data['NA']=='M') {?>
                  <span class="label label-success"><i class="glyphicon glyphicon-info-sign"></i> Tidak Disetujui</span>
                <?php }else { ?>
                  <span class="label label-danger"><i class="ion-android-close"></i>Menunggu Persetujuan </span>
                <?php } ?>
        <?php } ?>
        </td>
      </tr>
      <?php } ?>
    </tbody>
</table>