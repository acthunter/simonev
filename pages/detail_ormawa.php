<style media="print">
.noprint     { display: none }
</style>
<style type="text/css">
.kiri {
	text-align: left;
	float: left;
}
.cetak {
	font-family: sans-serif;
	font-size: 13px;
}
</style>

 <?php
 $file   = $_POST['file'];
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
    <div class="panel panel-color panel-info noprint">
        <div class="panel-heading"> 
            <h3 class="panel-title">Detail UKM</h3> 
        </div> 
        <div class="panel-body"> 
            <?php if ($LevelID=='2') {?>
	    	<div class="col-lg-3"> 
                <?php if (empty($data['Foto'])) {?>
    		 	   <img width="100%" height="150px" src="upload/logo.png">
                <?php }else{ ?>
                    <img  width="100%" src="upload/<?php echo $Foto; ?>">
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
    <ul class="nav nav-tabs noprint"> 
        <li class="<?php echo $_GET['Akun']; ?>"> 
            <a href="#akun" data-toggle="tab" aria-expanded="false"> 
                <span class="visible-xs"><i class="ion-home"></i></span> 
                <span class="hidden-xs">Data Akun UKM</span> 
            </a> 
        </li> 
        <li class="<?php echo $_GET['Mahasiswa']; ?>"> 
            <a href="#Mahasiswa" data-toggle="tab" aria-expanded="true"> 
                <span class="visible-xs"><i class="fa fa-user"></i></span> 
                <span class="hidden-xs">Mahasiswa</span> 
            </a> 
        </li> 
        <li class="<?php echo $_GET['StrukturOrganisasi']; ?>"> 
            <a href="#StrukturOrganisasi" data-toggle="tab" aria-expanded="false"> 
                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                <span class="hidden-xs">Struktur Organisasi</span> 
            </a> 
      </li> 
        <li class="<?php echo $_GET['ProgramKerja']; ?>"> 
            <a href="#Programkerja" data-toggle="tab" aria-expanded="false"> 
                <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                <span class="hidden-xs">Program Kerja</span> 
            </a> 
        </li>
        
        <li class="<?php echo $_GET['AnggaranDana']; ?>"> 
            <a href="#Dana" data-toggle="tab" aria-expanded="false"> 
                <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                <span class="hidden-xs">Total Anggaran Dana</span> 
            </a> 
        </li> 
       
    </ul> 
    <div class="tab-content"> 
        <div class="tab-pane <?php echo $_GET['Akun']; ?>" id="akun"> 
            <div> 
                <?php include 'akun_ormawa.php'; ?>
            </div> 
        </div> 
        <div class="tab-pane <?php echo $_GET['Mahasiswa']; ?>" id="Mahasiswa"> 
            <div> 
                <?php include 'mahasiswa_ormawa.php'; ?>
   </div> 
</div> 
        <div class="tab-pane <?php echo $_GET['StrukturOrganisasi']; ?>" id="StrukturOrganisasi"> 
            <?php include 'struktur_organisasi.php'; ?>
        </div> 
<div class="tab-pane" id="Dana"> 
            <div> 
                <?php include 'total_anggaran_dana.php'; ?>
            </div> 
        </div>
        <div class="tab-pane <?php echo $_GET['ProgramKerja']; ?>" id="Programkerja"> 
            <div> 
                <?php include 'proker.php'; ?>
            </div>
    </div> 
</div>