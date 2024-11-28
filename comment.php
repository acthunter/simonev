<?php 
ob_start();
session_start();
    include 'layout/header.php'; 
    include 'library/lib.php';
    include 'config/koneksi.php';
?>
    <body>
        <style type="text/css">
        #form {
          position: fixed;
          left: 4px;
          bottom: 0px;
          right: 4px;
          padding-top: 24px;
          margin-bottom: 0;
          width: 97%;
          z-index: 998;
          outline-color: blue;
          }
        </style>
        <center></center>
    <div class="row">
      <div class="col-xs-11">
        <?php
             error_reporting(0);
            if (isset($_POST['Kirim'])) {
                $KomentarID = Guid();
                $ProkerID  = $_GET['ProkerID'];
                $Komentar = $_POST['Komentar'];
                $PimpinanID = "Pembina Organisasi Mahasiswa UPI YPTK PADANG";
                $Date   = date('Y-m-d');
                mysqli_query($koneksi,"INSERT INTO `komentar`(
                            `KomentarID`,
                            `ProkerID`, 
                            `Komentar`, 
                            `PimpinanID`, 
                            `Date`) 
                            VALUES (
                            '$KomentarID',
                            '$ProkerID',
                            '$Komentar',
                            '$PimpinanID',
                            '$Date')");
               header('refresh:1;');
            }elseif ($_GET['HapusKomen']) {
                $KomentarID = $_GET['HapusKomen'];
                $ProkerID = $_GET['ProkerID'];
               mysqli_query($koneksi,"DELETE FROM `komentar` WHERE KomentarID = '$KomentarID'");
                header('refresh:1;url=?ProkerID='.$ProkerID.'');
            }
            $ProkerID = $_GET['ProkerID'];
            $result = mysqli_query($koneksi,"SELECT * FROM proker WHERE ProkerID = '$ProkerID'"); 
            $data=mysqli_fetch_array($result);
        ?>
        <h3>Proker : <?php echo $data['ProgramKerja'];?><br>
        </h3>
        <hr>
        <?php 
        $LevelID=$_SESSION['LevelID'];
        if ($LevelID=='1' OR $LevelID=='3') {?>
        <div style="overflow:scroll;height:350px;width:900px; background-color:white;">
        <?php }else{ ?>
        <div style="overflow:scroll;height:500px;width:900px; background-color:white;">
        <?php } ?>
        <?php 
            $ect = mysqli_query($koneksi,"SELECT * FROM komentar WHERE ProkerID='$ProkerID'");
            while ($d=mysqli_fetch_array($ect)) {?>
             <blockquote>
                    <p><?php echo $d['Komentar']; ?></p>
                    <footer>Pengirim <cite title="Source Title"><?php echo $d['PimpinanID']  ?></cite></footer>
                     <footer>Tanggal <cite title="Source Title"><?php echo $d['Date']; ?></cite> 
                      <?php if ($LevelID=='2') {?>
                      <a href="?ProkerID=<?php echo $_GET['ProkerID']; ?>&HapusKomen=<?php echo $d['KomentarID'];?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a></footer>
                      <?php } ?>
                  </blockquote>
          <?php }?>
        </div>
        <?php 
        $LevelID=$_SESSION['LevelID'];
        if ($LevelID=='1' OR $LevelID=='3') {?>
        <form id="form" action="" method="POST" role="form">
          <div class="form-group">
            <textarea name="Komentar" class="form-control"></textarea>
            <button type="submit" name="Kirim" class="btn btn-primary btn-lg btn-block">Kirim Komentar</button>
          </div>
        </form>
        <?php } ?>
      </div>
    </div>

<?php 
include 'layout/footer.php'; 
ob_flush();
?>