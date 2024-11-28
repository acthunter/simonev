<?php 
error_reporting(0);
ob_start();
session_start();
    include 'layout/header.php'; 
    include 'library/lib.php';
    include 'config/koneksi.php';
    if (isset($_POST['login'])) {
      $Level = $_POST['Level'];
      if ($Level=='DPM') {
          $Username  = $_POST['Username'];
          $Password  = $_POST['Password'];
          $query = mysqli_query($koneksi,"SELECT * FROM `admin` WHERE Username = '$Username' AND Password = '$Password' AND NA = 'A'");
          $cek = mysqli_num_rows($query);
          $data = mysqli_fetch_array($query);
          if ($cek > 0) {
            $_SESSION['LevelID'] = $data['LevelID'];
            $_SESSION['Nama']   = $data['Nama'];
            $_SESSION['AdminID']= $data['AdminID'];
            echo '<script>
                    window.location = "media.php?page=home"
                  </script>';
          }else{
            echo '<div class="alert alert-danger" role="alert"><b>Login Gagal !</b> Pastikan username dan password yang anda masukan benar</div>';
            header("refresh:2;");
          }
      }elseif ($Level=='Pimpinan') {
          $Username  = $_POST['Username'];
          $Password  = $_POST['Password'];
          $query = mysqli_query($koneksi,"SELECT * FROM `pimpinan` WHERE Username = '$Username' AND Password = '$Password' AND NA = 'A'");
          $cek = mysqli_num_rows($query);
          $data = mysqli_fetch_array($query);
          if ($cek > 0) {
            $_SESSION['LevelID']     = $data['LevelID'];
            $_SESSION['Nama']        = $data['Nama'];
            $_SESSION['PimpinanID']  = $data['PimpinanID'];
			 $_SESSION['LevelID']     = $data['LevelID'];
            $_SESSION['OrmawaID']    = $data['OrmawaID'];
            $_SESSION['NamaOrmawa']  = $data['NamaOrmawa'];
            echo '<script>
                    window.location = "media.php?page=home"
                  </script>';
          }else{
            echo '<div class="alert alert-danger" role="alert"><b>Login Gagal !</b> Pastikan username dan password yang anda masukan benar</div>';
            header("refresh:2;");
          }
       
      }elseif ($Level=='ORMAWA') {
          $Username  = $_POST['Username'];
          $Password  = $_POST['Password'];
          $query =mysqli_query($koneksi,"SELECT * FROM `ormawa` WHERE Username = '$Username' AND Password = '$Password' AND NA = 'A'");
          $cek = mysqli_num_rows($query);
          $data = mysqli_fetch_array($query);
          if ($cek > 0) {
            $_SESSION['LevelID']     = $data['LevelID'];
            $_SESSION['OrmawaID']    = $data['OrmawaID'];
            $_SESSION['NamaOrmawa']  = $data['NamaOrmawa'];
			
            echo '<script>
                    window.location = "media.php?page=home"
                  </script>';
          }else{
            echo '<div class="alert alert-danger" role="alert"><b>Login Gagal !</b> Pastikan username dan password yang anda masukan benar</div>';
            header("refresh:2;");
          }
      }elseif (empty($Level)) {
        echo '<div class="alert alert-danger" role="alert"><b>Login Gagal !</b> Pastikan memilih level login</div>';
        header("refresh:2;");
      }
    }
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body background="img/upi-copy.jpg">
<marquee bgcolor="#99FFFF"><h1 align="center"><font size="+2" color="#FF0000">Selamat Datang Di Sistem Informasi Monitoring dan Evaluasi Unit Kegiatan Mahasiswa UPI YPTK PADANG</font></h1></marquee>
   <body>
      <br><br><br><br>
     <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <!-- <center><img src="web.png" width="100%" height="170px"></center> -->
       <div class="panel panel-color panel-info">
        <div class="panel-heading"> 
            <h3 class="panel-title">Masuk Aplikasi</h3> 
        </div> 
        <div class="panel-body"> 
          <form role="form" action="" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" name="Username" id="exampleInputEmail1" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password"  name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Level</label>
              <select class="form-control" name="Level">
                <option value="">--Pilih Level--</option>
                <option value="DPM">Akama (Akademik Mahasiswa)</option>
                <option value="Pimpinan">Pembina Organisasi</option>
                <option value="ORMAWA">UKM (Unit Mahasiswa )</option>
              </select>
            </div>
            <button type="submit" name="login" class="btn btn-info">Masuk</button>
            <button type="reset" class="btn btn-danger">Hapus</button>
          </form>
        </div>
      </div>
      </div>
      <div class="col-md-3"></div>
    </div>

<?php 
include 'layout/footer.php'; 
ob_flush();
?>