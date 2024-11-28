	<form role="form" action="" method="POST">
	<input type="hidden" name="OrmawaID" value="<?php echo $data['OrmawaID']; ?>" placeholder="">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama UKM</label>
        <input type="text" value="<?php echo $data['NamaOrmawa']; ?>" name="NamaOrmawa" class="form-control span5"  placeholder="Nama Ormawa">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Penanggung Jawab</label>
        <input type="text" value="<?php echo $data['PenanggungJawab']; ?>" name="PenanggungJawab" class="form-control span5" id="exampleInputEmail1" placeholder="Penanggung Jawab">
      </div>
  
       <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="Username" value="<?php echo $data['Username']; ?>" class="form-control span5" id="exampleInputEmail1" placeholder="Username">
      </div>
       <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="text" name="Password" value="<?php echo $data['Password']; ?>" class="form-control span5" id="exampleInputEmail1" placeholder="Password">
      </div>
       <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
        <select class="form-control" name="NA" id="exampleInputEmail1">
          <option value="">--Pilih Status</option>
          <option value="A" <?php if ($data['NA']=='A'){echo "selected";}?>>Aktif</option>
          <option value="N" <?php if ($data['NA']=='N'){echo "selected";}?>>Non Aktif</option>
        </select>
      </div>
    <center>
    	<button type="submit" name="UpdateOrmawa" class="btn btn-primary"><i class="ion-edit"></i> Update Data</button>
	    <button type="button" class="btn btn-danger"><i class="ion-android-trash"></i> Reset</button>
    </center>
  </form>