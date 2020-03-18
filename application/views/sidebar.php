<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
         Hello, <?php echo $this->session->userdata('nama'); ?>
          
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="#">
              <i class="nc-icon nc-single-02"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
            <a href="#">
              <i class="nc-icon nc-circle-10"></i>
              <p>Data Karyawan</p>
            </a>
          </li>
          
          <li>
            <a href="#">
              <i class="nc-icon nc-book-bookmark"></i>
              <p>Laporan</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">