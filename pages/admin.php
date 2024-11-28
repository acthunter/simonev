<?php 
include 'aksi/lib_admin.php';
?>
<div class="col-lg-12">
    <div class="panel panel-color panel-danger">
        <div class="panel-heading"> 
            <h3 class="panel-title">AKAMA</h3> 
        </div> 
        <div class="panel-body"> 
            <!-- Button trigger modal -->
<button class="btn btn-success" data-toggle="modal" data-target="#myModal">
  <i class="glyphicon glyphicon-plus"></i> Tambah Admin AKAMA
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Admin Sistem </h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="POST" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="NIM" id="inputEmail3" placeholder="NIM">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name='Nama' id="inputPassword3" placeholder="Nama">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name='Hp' id="inputPassword3" placeholder="HP">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name='Email' id="inputPassword3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name='Username' id="inputPassword3" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name='Password' id="inputPassword3" placeholder="Password">
            </div>
          </div>
                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <button type="submit" name="SimpanAdmin" class="btn btn-primary">Simpan</button>
                  </div>
            </form>
                </div>
              </div>
            </div>
        	<table class="table">
        		<thead>
        			<tr>
        				<th width="1%">No</th>
        				<th>Nama</th>
                        <th>HP</th>
                        <th>Email</th>
        				<th>Username</th>
        				<th>Password</th>
        				<th>Aksi</th>
        			</tr>
        		</thead>
        		<tbody>
                <?php
                  $no=1;
                  $result = mysqli_query($koneksi,"SELECT * FROM admin"); 
                  while ($data=mysqli_fetch_array($result)) {
                 ?>
        			<tr>
        				<td><?php echo $no++; ?></td>
                        <td>
<button class="btn btn-purple btn-sm" data-toggle="modal" data-target="#myModal<?php echo $data['AdminID']; ?>">
  <i class="glyphicon glyphicon-edit"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $data['AdminID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> Edit  Tambah Admin Sistem</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="" method="POST" role="form">
        <input type="hidden" name="AdminID" value="<?php echo $data['AdminID']; ?>" placeholder="">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $data['NIM']; ?>"name="NIM" id="inputEmail3" placeholder="NIM">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $data['Nama']; ?>" name='Nama' id="inputPassword3" placeholder="Nama">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $data['Hp']; ?>" name='Hp' id="inputPassword3" placeholder="HP">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $data['Email']; ?>" name='Email' id="inputPassword3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $data['Username']; ?>" name='Username' id="inputPassword3" placeholder="Username">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="<?php echo $data['Password']; ?>" name='Password' id="inputPassword3" placeholder="Password">
            </div>
          </div>
                  </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <button type="submit" name="UpdateAdmin" class="btn btn-primary">Simpan</button>
                  </div>
            </form>
                </div>
              </div>
            </div>


                            <?php echo $data['Nama'];?></td>
                        <td><?php echo $data['Hp'];?></td>
                        <td><?php echo $data['Email'];?></td>
                        <td><?php echo $data['Username'];?></td>
                        <td><?php echo $data['Password'];?></td>
                        <td>
                        <?php 
                            if ($data['NA']=='N') {?>
                                <a href="?page=admin&admin=active&AdminID=<?php echo $data['AdminID']; ?>&NA=A" class="btn btn-danger btn-sm"><i class="ion-android-close"></i></a>
                            <?php }else{?>
                                <a href="?page=admin&admin=active&AdminID=<?php echo $data['AdminID']; ?>&NA=N" class="btn btn-primary btn-sm"><i class="ion-android-checkmark"></i></a>
                        <?php } ?>
                        </td>
        			</tr>
                <?php } ?>
        		</tbody>
        	</table>
        </div>
     </div>
</div>