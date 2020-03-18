<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!--<link rel="icon" type="image/png" href="../assets/img/favicon.png">-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>
    Sistem Informasi Penggajian
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
      <!--sidebar-->
      <?php include 'sidebar.php'; ?>
      <!-- Navbar -->
      <?php include 'header.php'; ?>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
      
      <!--Data Karyawan-->
      <form class="form-horizontal" action="<?php echo base_url(). 'lkaryawan/tambah_aksi'; ?>" method="post">
      <div class="form-group">
            <label class="control-label col-sm-2">NIK </label>
            <div class="col-sm-10">
            <input type="text" name="nik">
        </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Nama </label>
            <div class="col-sm-10">
            <input type="text" name="nama">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Alamat </label>
            <div class="col-sm-10">
            <input type="text" name="alamat">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Jenis Kelamin </label>
            <div class="col-sm-10">
            <select name="jenis_kelamin" >
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Pekerjaan </label>
            <div class="col-sm-10">
            <select name="pekerjaan" >
                <option >Pilih Pekerjaan</option>
                <option >Web Designer</option>
                <option >Web Programmer</option>
            </select>
            </div>
            </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Gaji </label>
            <div class="col-sm-10">
            <input type="text" name="gaji">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Status </label>
            <div class="col-sm-10">
            <select name="status" >
                <option >Pilih Status</option>
                <option >Bekerja</option>
                <option >Cuti</option>
                <option >Tidak Bekerja</option>
            </select>
            </div>
            </div>
		<div class="col-sm-offset-1 col-sm-10">
          
          <?php echo anchor(site_url('lkaryawan/index'),'Kembali', 'class="btn btn-info"'); ?>
          <button type="submit" class="btn btn-primary">Tambah</button>
</div>

     
            <!--Fungsi-->

    
       
        <footer>
        
           
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
