<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-desktop"></i>
                </div>
                <div class="sidebar-brand-text mx-2">SiRapot <sup><i class="fa-regular fa-hand-peace"></i></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa-brands fa-buffer"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Master</h6>
                        <a class="collapse-item" href="<?php echo base_url('index.php/siswa');?>">Siswa</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/jurusan');?>">Jurusan</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/kelas');?>">Kelas</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/guru');?>">Guru</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/mapel');?>">Mapel</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/ekskul');?>">Ekstrakurikuler</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/dudi');?>">DuDi</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/from_rapot');?>">Form Rapot</a>
                       
                     
                       
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Setting Admin</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Setting Admin</h6>
                        <a class="collapse-item" href="<?php echo base_url('index.php/walikelas');?>">Set Walikelas</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/rombel');?>">Set Rombel</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/SetMapel');?>">Set Mapel</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/SetPembinaEkskul');?>">Set Pembina Ekskul</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/set_dudi');?>">Set DuDi</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/user');?>">Set User</a>
                       
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
                    aria-expanded="true" aria-controls="collapsethree">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Nilai Akademik</span>
                </a>
            <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Nilai Akademik</h6>
                        <a class="collapse-item" href="<?php echo base_url('index.php/nilai_akhir');?>">Nilai Akhir</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/jurusan');?>">Nilai Kehadiran</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/kelas');?>">Nilai Ekskul</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/guru');?>">Nilai Sikap</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/mapel');?>">Nilai Prakerin</a>
                        <a class="collapse-item" href="<?php echo base_url('index.php/ekskul');?>">Catatan Walikelas</a>
                    </div>
                </div>
            </li>
            
            

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">