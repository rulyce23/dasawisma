<!-- Sidebar -->

<link href="<?php echo base_url('assets/bootstrap/css/sidebar.css') ?>" rel="stylesheet">

<ul class="sidebar li navbar-nav">
		<div class="col-md-4" >
		 <div class="row profile">
		<div class="profile-userpic">
		<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
		    <span><font color="white">&nbsp;&nbsp;DASAWISMA</font></span><br>
			<span><font color="white">&nbsp;&nbsp;JABAR</font></span>
		      </a>
    </li>
				</div>
	
				<!-- SIDEBAR USERPIC -->		
				</div>
    <li class="nav-item sidebar-custom <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>
	    <li class="nav-item sidebar-custom <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/rumtinggal') ?>">
            <i class="fas fa-fw fa-archive"></i>
            <span>Data Rumah Tinggal</span>
        </a>
    </li>
	   <li class="nav-item sidebar-custom <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/keluarga') ?>">
            <i class="fas fa-fw fa-archive"></i>
            <span>Data Keluarga</span>
        </a>
    </li>
	<li class="nav-item sidebar-custom <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/warga') ?>">
            <i class="fas fa-fw fa-archive"></i>
            <span>Data Warga</span>
        </a>
    </li>
	    <li class="nav-item sidebar-custom dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-file"></i>
            <span>Laporan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/laporan1') ?>">Laporan Format 1</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/laporan2') ?>">Laporan Format 2</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/laporan3') ?>">Laporan Format 3</a>
   
		</div>
    </li>
    <li class="nav-item sidebar-custom dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Master Data</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/dasawisma') ?>">Data Dasawisma</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/rt') ?>">Data RT</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/rw') ?>">Data RW</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/variabel') ?>">Data Variable</a>
   
		</div>
    </li>
    <li class="nav-item sidebar-custom dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-user"></i>
            <span>Management User</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/usergroup') ?>">User Group</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/user') ?>">User</a>
        </div>
    </li>
</ul>
