

<link href="<?php echo base_url('assets/bootstrap/css/navbar.css') ?>" rel="stylesheet">
<nav class="navbar navbar-expand navbar-dark navbar-custom static-top">
<div class="frame-square">
<img src="<?php echo base_url('assets/images/daswi.jpg') ?>" class="w3-round-small" width="65" height="65" align="left">
</div>
</div>
  <font color="white" style="font-family:tahoma;" size="3px">&nbsp;&nbsp;SISTEM INFORMASI DASAWISMA</font>


    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          
            <div class="input-group-append">
                
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <font color="white"><i class="fas fa-user-circle fa-fw"></i>Admin PKK</font>
            </a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
               <div class="modal-body">
				<center><img src="<?php echo base_url('assets/images/avatars.png') ?>" class="w3-round-small" width="100" height="100" align="center"></center>
				</div>    
				<div class="modal-body">
				<center><b>Admin PKK</b></center>
				</div>
                <div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal"><font color="black">Profile</font></button>
			  <button type="button" class="btn btn-danger">Exit</button>
			 </div>
            </div>
  </li>
    </ul>


</nav>
