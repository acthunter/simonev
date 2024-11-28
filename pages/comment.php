<?php 
    include 'layout/header.php'; 
    include 'library/lib.php';
    include 'config/koneksi.php';
?>
    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="index.html" class="logo-expanded">
                    <img src="img/single-logo.png" alt="logo">
                    <span class="nav-label">SIMONEV</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="has-submenu <?php echo $_GET['home'];?>"><a href="?page=home&home=active">
                      <i class="ion-home"></i> <span class="nav-label">Home</span></a>
                    </li>
                    <li class="has-submenu <?php echo $_GET['user'];?>"><a href="#"><i class="ion-person-stalker"></i> <span class="nav-label">Data User System</span></a>
                        <ul class="list-unstyled">
                            <li><a href="?page=pimpinan&user=active">Data Pimpinan</a></li>
                            <li><a href="?page=ormawa&user=active">Data UKM</a></li>
                        </ul>
                    </li>
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
                
              
                
                <!-- Right navbar -->
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                            <span class="username">Ari</span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            <li><a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->

            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Sistem Informasi Monitoring Kegiatan Ormawa</h3> 
                </div>
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
                2019 © Ari Rizki Ramanda
            </footer>
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->
    
<?php include 'layout/footer.php'; ?>