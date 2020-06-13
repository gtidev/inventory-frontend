<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Inventory <sup>VIP</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="../dashboard/dashboard.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Data
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#barang" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Barang</span>
    </a>
    <div id="barang" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Sub</h6>
        <a class="collapse-item" href="<?php echo base_url('/Barang') ?>">Data Barang</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pendaftaran" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Cores</span>
    </a>
    <div id="pendaftaran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Modul</h6>
        <a class="collapse-item" href="<?php echo base_url('/Kategori') ?>">Kategori</a>
        <a class="collapse-item" href="<?php echo base_url('/Keuangan') ?>">Keuangan</a>
        <a class="collapse-item" href="<?php echo base_url('/Pekerja') ?>">Pekerja</a>
        <a class="collapse-item" href="<?php echo base_url('/Pengguna') ?>">Pengguna</a>
        <a class="collapse-item" href="<?php echo base_url('/Perusahaan') ?>">Perusahaan</a>
        <a class="collapse-item" href="<?php echo base_url('/Referensi') ?>">Referensi</a>
        <a class="collapse-item" href="<?php echo base_url('/Ruang') ?>">Ruang</a>
        <a class="collapse-item" href="<?php echo base_url('/Satuan') ?>">Satuan</a>
      </div>
    </div>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link" href="../barang/index.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Barang</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Kategori</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Keuangan</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Pekerja</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Pengguna</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Perusahaan</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Referensi</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Ruang</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Satuan</span></a>
  </li> -->
  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pendaftaran" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Pendaftaran</span>
    </a>
    <div id="pendaftaran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Peserta</h6>
        <a class="collapse-item" href="lomba.php">Siswa</a>
        <a class="collapse-item" href="pendamping.php">Pendamping</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#lihatdata" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Lihat Data</span>
    </a>
    <div id="lihatdata" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Peserta</h6>
        <a class="collapse-item" href="list_pendamping.php">Pendamping</a>
        <a class="collapse-item" href="fls2n.php">Siswa</a>
      </div>
    </div>
  </li> -->
  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#isidata" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Isi Data</span>
    </a>
    <div id="isidata" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Kegiatan</h6>
        <a class="collapse-item" href="fls2n.php">FLS2N</a>
      </div>
    </div>
  </li> -->

  <!-- Nav Item - Utilities Collapse Menu -->
  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Utilities:</h6>
        <a class="collapse-item" href="utilities-color.html">Colors</a>
        <a class="collapse-item" href="utilities-border.html">Borders</a>
        <a class="collapse-item" href="utilities-animation.html">Animations</a>
        <a class="collapse-item" href="utilities-other.html">Other</a>
      </div>
    </div>
  </li> -->

  <!-- Divider -->
  <!-- <hr class="sidebar-divider"> -->

  <!-- Heading -->
  <!-- <div class="sidebar-heading">
    Addons
  </div> -->

  <!-- Nav Item - Pages Collapse Menu -->
  <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login Screens:</h6>
        <a class="collapse-item" href="login.html">Login</a>
        <a class="collapse-item" href="register.html">Register</a>
        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="404.html">404 Page</a>
        <a class="collapse-item" href="blank.html">Blank Page</a>
      </div>
    </div>
  </li> -->

  <!-- Nav Item - Charts -->
  <!-- <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li> -->

  <!-- Nav Item - Tables -->
  <!-- <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li> -->

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->