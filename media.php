<?php
    error_reporting(0);
    session_start();
    include 'layout/header.php'; 
    include 'library/lib.php';
    include 'config/koneksi.php';
    $LevelID = $_SESSION['LevelID'];
    if (empty($LevelID)) {
       echo '<script>
                document.location = "login.php"
            </script>';
    }
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body background="img/upi-copy.jpg">
   <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="?page=home" class="logo-expanded">
                    <span class="nav-label">Monitoring Kegiatan UKM</span>
                </a>
          </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="has-submenu <?php echo $_GET['home'];?>"><a href="?page=home&home=active">
                      <i class="ion-home"></i> <span class="nav-label">Beranda</span></a>
                    </li>
                    <?php if ($LevelID=='1') {?>
                    <li class="has-submenu <?php echo $_GET['user'];?>"><a href="#"><i class="ion-person-stalker"></i> <span class="nav-label">Option</span></a>
                        <ul class="list-unstyled">
                            <li><a href="?page=pimpinan&user=active">Data Pembina</a></li>
                            <li><a href="?page=ormawa&user=active">Data UKM</a></li>
                            <li class="has-submenu <?php echo $_GET['admin'];?>"><a href="?page=admin&user=active">
                               <span class="nav-label">Data Admin</span></a>
                            </li>
                        </ul>
                    </li>
                     <li class="has-submenu <?php echo $_GET['datalpj'];?>"><a href="?page=ormawalpj&ormawalpj=active">
                      <i class="glyphicon glyphicon-list"></i> <span class="nav-label">Data LPJ UKM</span></a>
                    </li>
                    <li class="has-submenu <?php echo $_GET['Mahasiswa'];?>"><a href="?page=allmahasiswa&Mahasiswa=active">
                      <i class="glyphicon glyphicon-th-list"></i> <span class="nav-label">Daftar Mahasiswa</span></a>
                    </li>
                    <li class="has-submenu <?php echo $_GET['proker'];?>"><a href="?page=allproker&proker=active">
                      <i class="glyphicon glyphicon-bookmark"></i> <span class="nav-label">Daftar Data Kegiatan UKM</span></a>
                    </li>
                        <li class="has-submenu <?php echo $_GET['user'];?>"><a href="#"><i class="glyphicon glyphicon-stats"></i> <span class="nav-label">Laporan Proker</span></a>
                        <ul class="list-unstyled">
                            <li><a href="?page=alllaporanprokerbulan&alllaporanprokerbulan=active">Data Per Bulan</a></li>
                            <li><a href="?page=alllaporanprokertahun&alllaporanprokertahun=active">Data Per Tahun</a></li>
                           
                        </ul>
                    </li>
                   <!--  <li class="has-submenu <?php// echo $_GET['st_mahasiswa'];?>"><a href="?page=st_mahasiswa&st_mahasiswa=active">
                      <i class="glyphicon glyphicon-signal"></i> <span class="nav-label">Statistik Mahasiswa</span></a>
                    </li> -->
                   
                    <?php } ?>
                    <?php if ($LevelID=='3') {?>
                    <li class="has-submenu <?php echo $_GET['user'];?>"><a href="#"><i class="ion-person-stalker"></i> <span class="nav-label">Option</span></a>
                        <ul class="list-unstyled">
                            <li><a href="?page=pimpinan&user=active">Data Pembina</a></li>
                            <li><a href="?page=pembina&user=active">Data UKM</a></li>
                        </ul>
                    </li>
<li class="has-submenu <?php echo $_GET['Mahasiswa'];?>"><a href="?page=pembinamahasiswa&Mahasiswa=active">
          <i class="glyphicon glyphicon-th-list"></i> <span class="nav-label">Daftar Mahasiswa</span></a>
        </li>
                    <li class="has-submenu <?php echo $_GET['proker'];?>"><a href="?page=pembinaproker&proker=active">
                      <i class="glyphicon glyphicon-bookmark"></i> <span class="nav-label">Daftar Data Kegiatan UKM</span></a>
                    </li>
                  
                    <li class="has-submenu <?php echo $_GET['user'];?>"><a href="#"><i class="glyphicon glyphicon-stats"></i> <span class="nav-label">Laporan Proker</span></a>
                        <ul class="list-unstyled">
                            <li><a href="?page=laporanprokerbulan&laporanprokerbulan=active">Data Per Bulan</a></li>
                            <li><a href="?page=laporanprokertahun&laporanprokertahun=active">Data Per Tahun</a></li>
                         
                        </ul>
                    </li>
                    <!-- <li class="has-submenu <?php //echo $_GET['st_mahasiswa'];?>"><a href="?page=st_mahasiswa&st_mahasiswa=active">
                      <i class="glyphicon glyphicon-signal"></i> <span class="nav-label">Statistik Mahasiswa</span></a>
                    </li> -->
                    
                    <?php } ?>
                    <?php if ($LevelID=='2') {?>
                     <li class="has-submenu <?php echo $_GET['data'];?>"><a href="?page=data&data=active">
                      <i class="glyphicon glyphicon-list"></i> <span class="nav-label">Data UKM</span></a>
                    </li>
                       <li class="has-submenu <?php echo $_GET['datalpj'];?>"><a href="?page=datalpj&datalpj=active">
                      <i class="glyphicon glyphicon-list"></i> <span class="nav-label">Data LPJ UKM</span></a>
                    </li>
                    <li class="has-submenu <?php echo $_GET['st_anggaran'];?>"><a href="?page=st_anggaran&st_anggaran=active">
                     
                    <?php } ?>
                     <li class="has-submenu <?php echo $_GET['logout'];?>"><a href="?page=logout&logout=active">
                      <i class="glyphicon glyphicon-log-out"></i> <span class="nav-label">Keluar</span></li></a>
                    
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                           <?php 
                    error_reporting(0);
                    if (file_exists("pages/".$_GET['page'].".php")) {
                        if($_GET['page']!="home"){
                            include"pages/".$_GET['page'].".php";
                        }else{

                            include"pages/home.php";
                        }
                    }else{
                        echo "<h2>Halaman Tidak Ditemukan</h2>";
                    } 
                ?>
            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer class="footer">
                <h class="noprint">© Copyright 2019 UPI YPTK PADANG Ari Rizki Ramanda</h>
            </footer>
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->
    
<?php include 'layout/footer.php'; ?>
