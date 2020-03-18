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
  <title>
    Sistem Informasi Karyawan
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
  <link href="assets/dist/sweetalert.css" rel="stylesheet" type="text/css" >
	<link href="assets/dist/bootstrap.css" rel="stylesheet" type="text/css" >
	<script src="assets/dist/jquery-3.2.1.min.js"></script>
	<script src="assets/dist/sweetalert.min.js"></script>
  <script src="assets/dist/sweetalert2.all.min.js"></script>

  
</head>

<body class="">
  <!--sidebar-->
      <?php include 'sidebar.php'; ?>
      <!-- Navbar -->
      <?php include 'header.php'; ?>
      <!-- End Navbar -->
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
      <?php echo anchor(site_url('lkaryawan/tambah'),'Tambah Data', 'class="btn btn-primary"'); ?>
      
      <br>
      <!--Data Karyawan-->
       
      <table class="table table-hover">
      <thead class="thead-light">
      
        <tr>
        <th>No</th>
        <th>Nik</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Pekerjaan</th>
        <th>Gaji</th>
        <th>Status</th>
        <th>Aksi</th>
        </tr>
     </thead>
 <!--Fungsi-->
 <?php 
		$no = 1;
		foreach($karyawan as $u){ 
		?>
    
    		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nik ?></td>
      <td><?php echo $u->nama ?></td>
      <td><?php echo $u->alamat ?></td>
      <td><?php echo $u->jenis_kelamin ?></td>
      <td><?php echo $u->pekerjaan ?></td>
      <td><?php echo $u->gaji ?></td>
      <td><?php echo $u->status ?></td>
			<td>
      <a href="" data-toggle="modal" data-target="#modal-edit<?=$u->id;?>"class="btn btn-info btn-sm">Edit</a>
     
      <button class="btn btn-danger btn-sm"><?php echo anchor(site_url('lkaryawan/hapus/'.$u->id),'Hapus','onclick="javasciprt: return confirm(\'Yakin anda akan menghapus data?\')"'); ?></button>
      
      
			</td>
		</tr>
    <?php } ?>
    
        </table>

          </div>
        </div>

        
  <!--modal edit-->
  <?php $no=0; foreach($karyawan as $u): $no++; ?>
<div class="row">
<!--membuat modal untuk edit data-->
  <div id="modal-edit<?=$u->id;?>" class="modal fade">
    <div class="modal-dialog">
    <!--form aksinya memanggil controller dari lkaryawan fungsi editt-->
      <form action="<?php echo site_url('lkaryawan/editt/'.$u->id); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title">Edit Data</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$u->id;?>" name="mod_id" class="form-control " >
 
          <div class="form-group">
            <label class="control-label col-sm-2">NIK </label>
            <div class="col-sm-10">
            <input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" class="form-control " readonly name="nik" value="<?php echo $u->nik ?>">
        </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" >Nama </label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Alamat </label>
            <div class="col-sm-10">
            <input type="text" class="form-control"name="alamat" value="<?php echo $u->alamat ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4">Jenis Kelamin </label>
            <div class="col-sm-10">
          
            <select class="form-control " name="jenis_kelamin" required>
                <option value="<?php echo $u->jenis_kelamin ?>"><?php echo $u->jenis_kelamin ?></option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Pekerjaan </label>
            <div class="col-sm-10">
            <select class="form-control " name="pekerjaan" required>
                                <option value="<?php echo $u->pekerjaan ?>"><?php echo $u->pekerjaan ?></option>
                                    <option value="Web Designer">Web Designer</option>
                                    <option value="Web Programmer">Web Programmer</option>
                             </select>
            </div>
            </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Gaji </label>
            <div class="col-sm-10">
            <input type="text" class="form-control"name="gaji" value="<?php echo $u->gaji ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Status </label>
            <div class="col-sm-10">
            <select class="form-control" name="status" required>
                                <option value="<?php echo $u->status ?>"><?php echo $u->status ?></option>
                                    <option value="Bekerja">Bekerja</option>
                                    <option value="Cuti">Cuti</option>
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                     </select>
            </div>
            </div>
          <br>
        </div>
        
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-info"> Edit</button>
          </div>
        </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
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
