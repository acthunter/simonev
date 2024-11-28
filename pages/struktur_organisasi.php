<?php  {?>
<button class="btn btn-purple" data-toggle="modal" data-target="#q">
  <i class="ion-ios7-plus"></i> Tambah Struktur Organisasi
</button>
<?php } ?>

<br><br>
<div class="modal fade" id="q" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Struktur Organisasi</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="" method="POST">
          <input type="hidden" name="OrmawaID" value="<?php echo $_GET['OrmawaID']; ?>" placeholder="">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Jabatan</label>
                <input type="text" name="NamaJabatan" class="form-control span5"  placeholder="Nama Jabatan">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Urutan</label>
                <input type="text" name="Urutan" class="form-control span5"  placeholder="Urutan">
              </div>
               <div class="form-group">
                <label for="exampleInputEmail1">Warna Panel</label>
                <select class="form-control" name="Warna" id="exampleInputEmail1">
                  <option value="">--Pilih warna</option>
                  <option value="danger">Merah</option>
                  <option value="pink">Merah muda</option>
                  <option value="primary">Biru</option>
                  <option value="info">Biru Muda</option>
                  <option value="success">Hijau</option>
                  <option value="warning">Kuning</option>
                      <option value="purple">Ungu</option>
                </select>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="SimpanStrukturOrganisasi" class="btn btn-primary">Simpan</button>
          </form>
          </div>
        </div>
      </div>
    </div>
<style type="text/css">
#outline{

}
}
</style>
<div class="row">                
    <div class="col-lg-12">
      <div class="row">   
      <?php
        $result = mysqli_query($koneksi,"SELECT * FROM jabatan WHERE OrmawaID = '$OrmawaID' ORDER BY Urutan ASC"); 
        while ($data=mysqli_fetch_array($result)) {
      ?>         
        <div class="col-lg-6">
          <div id="outline" class="panel panel-color panel-<?php echo $data['Warna']; ?>">
              <div id="head" class="panel-heading"> 
                  <h3 class="panel-title"><p class="text-uppercase">
                    <?php {?>
                    <button class="btn btn-<?php echo $data['Warna']; ?>" data-toggle="modal" data-target="#myModal<?php echo $data['JabatanID'];?>">
                      <i class="ion-edit"></i>
                    </button>
                    <?php } ?>
                    <?php echo $data['NamaJabatan']; ?></p></h3> 
              </div> 
              <div class="panel-body"> 
                <?php
                  $no =1;
                  $r = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE JabatanID = '$data[JabatanID]'"); 
                  while ($d=mysqli_fetch_array($r)) {
                ?>
                  <h4><?php echo $no++.".". $d['Nama']; ?></h4>
                  <?php } ?>
              </div> 
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal<?php echo $data['JabatanID'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                <form role="form" action="" method="POST">
                  <input type="hidden" name="OrmawaID" value="<?php echo $data['OrmawaID']; ?>" placeholder="">
                  <input type="hidden" name="JabatanID" value="<?php echo $data['JabatanID']; ?>" placeholder="">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Jabatan</label>
                      <input type="text" name="NamaJabatan" value="<?php echo $data['NamaJabatan']; ?>" class="form-control span5"  placeholder="Nama Jabatan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Urutan</label>
                      <input type="text" name="Urutan" value="<?php echo $data['Urutan']; ?>" class="form-control span5"  placeholder="Urutan">
                    </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Warna Panel</label>
                    <select class="form-control" name="Warna" id="exampleInputEmail1">
                      <option value="">--Pilih warna</option>
                      <option value="danger" <?php if ($data['Warna']=='danger'){echo "selected";}?>>Merah</option>
                      <option value="pink" <?php if ($data['Warna']=='pink'){echo "selected";}?>>Merah muda</option>
                      <option value="primary"  <?php if ($data['Warna']=='primary'){echo "selected";}?>>Biru</option>
                      <option value="info" <?php if ($data['Warna']=='info'){echo "selected";}?>>Biru Muda</option>
                      <option value="success" <?php if ($data['Warna']=='success'){echo "selected";}?>>Hijau</option>
                      <option value="warning" <?php if ($data['Warna']=='warning'){echo "selected";}?>>Kuning</option>
                      <option value="purple" <?php if ($data['Warna']=='purple'){echo "selected";}?>>Ungu</option>
                    </select>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="Submit" name="UpdateStrukturOrganisasi" class="btn btn-primary">Update Data</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
  </div>
</div>
