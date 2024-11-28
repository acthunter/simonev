 <?php
 
 include 'aksi/lib_ormawa.php';
 include 'aksi/lib_struktur_organisasi.php';
 $OrmawaID=  $_GET['OrmawaID'];
 $result = mysqli_query($koneksi,"SELECT * FROM ormawa as a 
          						 LEFT JOIN pimpinan as b
          						 ON a.PimpinanID = b.PimpinanID WHERE OrmawaID='$OrmawaID'"); 
 $data=mysqli_fetch_array($result);
 $Foto = $data['Foto'];
?>
 <div class="col-lg-12">
    <div class="panel panel-color panel-info">
        <div class="panel-heading"> 
            <h3 class="panel-title">Lihat LPJ UKM</h3> 
        </div> 
        <div class="panel-body"> 
            <?php if ($LevelID=='2') {?>
	    	<div class="col-lg-3"> 
                <?php if (empty($data['Foto'])) {?>
    		 	   <img width="100%" height="150px" src="upload/logo.png">
                <?php }else{ ?>
                    <img width="100%" src="upload/<?php echo $Foto; ?>">
                <?php } ?>
                <form action="" method="POST" enctype="Multipart/form-data">
                    <input type="hidden" name="NamaFoto" value="<?php echo $data['Foto']; ?>">
                    <div class="form-group">
                    <label for="exampleInputFile">Upload Logo UKM</label>
                    <input type="file" name="Foto" id="exampleInputFile">
                    <p class="help-block">Maksimal 2 mb</p>
                    <button type="submit" name="UploadFoto" class="btn btn-primary btn-sm btn-block">Update Foto</button>
                  </div>
                </form>
        	</div>
            <?php }else{ ?>
            <div class="col-lg-3"> 
                <?php if (empty($data['Foto'])) {?>
                   <img width="100%" height="150px" src="upload/logo.png">
                <?php }else{ ?>
                    <img width="100%" src="upload/<?php echo $Foto; ?>">
                <?php } ?>
            </div>
            <?php } ?>
        	<div class="col-lg-9">
        		<div class="form-horizontal" role="form">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">UKM</label>
				    <div class="col-sm-10">
				      <input type="text" readonly value="<?php echo $data['NamaOrmawa']; ?>" class="form-control" id="inputEmail3" >
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">P. Jawab</label>
				    <div class="col-sm-10">
				      <input type="text" readonly value="<?php echo $data['PenanggungJawab']; ?>" class="form-control" id="inputPassword3">
				    </div>
				  </div>
                    <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Pembina</label>
				    <div class="col-sm-10">
				      <input type="text" readonly value="<?php echo $data['Nama']; ?>" class="form-control" id="inputPassword3">
				    </div>
				  </div>
				  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">No Hp</label>
                    <div class="col-sm-10">
                      <input type="text" readonly value="072367263726327" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" readonly value="ormawa@gmail.com" class="form-control" id="inputPassword3">
                    </div>
                  </div>
				</div>
        	</div>
        </div> 
    </div>
    <ul class="nav nav-tabs"> 
        <li class="<?php echo $_GET['LPJ']; ?>"> 
            <a href="#lpj" data-toggle="tab" aria-expanded="false"> 
                <span class="visible-xs"><i class="ion-home"></i></span> 
                <span class="hidden-xs">Data LPJ UKM</span> 
            </a> 
        </li> 
       
    </ul> 
    <div class="tab-content"> 
        <div class="tab-pane <?php echo $_GET['LPJ']; ?>" id="lpj"> 
            <div> 
                <?php include 'LPJ.php'; ?>
            </div> 
            </div>
        </div>
</div>