<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set("Asia/Makassar");

include "config/koneksi.php";
include "config/fungsi_indotgl.php";
include "config/fungsi_thumb.php";
include "config/fungsiku.php";
include 'config/konfigurasi.php';
include 'config/paginginfo.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from wbpreview.com/previews/WB052C9L0/index.php by HTTrack Website Copier/3.x [XR&CO'2010], Wed, 02 Jan 2013 20:58:01 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" />
    <title>FH-UNIDAR | Sistem Monitoring Tugas Akhir</title>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <link href="css/prettyPhoto.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.quicksand.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/smoothscroll.js"></script>
    <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/ajax-mail.js"></script>
    <script type="text/javascript" src="js/accordion.settings.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link href="css/ie.css" type="text/css" rel="stylesheet"/>
    <![endif]-->
</head>

<body>

<!-- top menu -->
<section id="top-menu">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>

<!-- header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="span6 logo">
                <a href="index.php?p=home"><img src="upload/header UPI.png" alt="logo"/></a>
            </div>
        </div>
        <nav id="menu">
            <ul class="clearfix">
                <li><a href="index.php?p=home" class="current">Beranda</a></li>
                <li><a href="index.php?p=about">Tentang FILKOM-UPI</a></li>
                <li><a href="index.php?p=info">Pengumuman</a></li>
                
            </ul>
        </nav>
    </div>
</header>

<!-- container -->
<section id="container">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    
                    <!-- page content -->
                    <section id="page-sidebar" class="alignleft span8">
                        <?php 
                            include 'tengah.php';
                        ?>
                    </section>
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
                 <option value="ORMAWA">UKM (Unit Kegiatan Mahasiswa )</option>
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