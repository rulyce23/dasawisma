<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/css/vendor.bundle.addons.css">
<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>


		<!-- /.container-fluid -->
 <div class="container-scroller">
<div class="container-fluid page-body-wrapper">
		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

   <div class="main-panel">
   <div class="content-wrapper">

            <!-- Content Wrapper. Contains page content -->
            <div class="col-lg-12 grid-margin stretch-card">
              <br>
                  <h5 class="card-title">&nbsp;&nbsp;Data Rumah Tinggal</h5>
				     <br><br>
        <p align="right"> <button type="button" class="fas fa-plus btn btn-info" data-toggle="modal" data-target="#myModal">&nbsp;&nbsp;Tambah Data Baru</button></p><!-- Modal -->
  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
		    <div class="card-body">
			      
                  <div class="table-responsive">
	<form method="post" id="register_form">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_data_details">Data Rumah Tinggal</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1"  style="border:1px solid #ccc" id="list_kuesioner_details">Kuesioner Data Rumah Tinggal</a>
     </li>
	 <div class="tab-content" style="margin-top:16px;">
     <div class="tab-pane active" id="rumting">
      <div class="panel panel-default">
       <div class="panel-heading">Data Rumah Tinggal</div>
       <div class="panel-body">
                    <table class="table table-striped" style="table-layout:auto; width:100%;">
                                                <tr>
												<div class="row">
                                                    <td><font size="2px" style="text-align: left;"><b> No Urut Survey Rumah Tinggal :</font></b></td>
												<td><input type="text" class="form-control" style="width:400px; border-radius:4px;  height:20px; font-family:Garamond; " id="no_survey" name="no_survey" ></td>
                                                    </div>
                                                </tr>
												
												<div class="row">
                                                    <td><font size="2px" style="text-align: left;"><b> Nama Kepala Rumah Tangga :</font></b></td>
												<td><input type="text" class="form-control" style="width:400px;  border-radius:4px;  height:20px; font-family:Garamond; " id="nama_kepalarumahtangga" name="nama_kepalarumahtangga"></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                    <td><font size="2px" style="text-align: left;"><b> No KTP Kepala Rumah Tangga :</font></b></td>
												<td><input type="text" class="form-control" style="width:400px;  border-radius:4px;  height:20px; font-family:Garamond; " id="no_ktp_kepalarumahtangga" name="no_ktp_kepalarumahtangga"></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                    <td><font size="2px" style="text-align: left;"><b> Alamat Rumah Tinggal :</font></b></td>
												<td><input type="text" class="form-control" style="width:400px;  border-radius:4px;  height:20px; font-family:Garamond; " id="alamat_rumahtinggal" name="alamat_rumahtinggal"></td>
                                                    </div>
                                                </tr>
                                                
												<tr>
												<div class="row">
                                                   <td><font size="2px" style="text-align: left;"><b>RT   :</font></b></td>
													<td><input type="text" class="form-control"  style="width:400px;  border-radius:4px; height:20px; font-family:Garamond;" id="nama_rt" name="nama_rt" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px" style="text-align: left;"><b>RW   :</font></b></td>
													<td><input type="text" class="form-control"  style="width:400px;  border-radius:4px; height:20px; font-family:Garamond; " id="nama_rw" name="nama_rw" disabled></td>
												
													</div>
                                                </tr>
											
													<tr>
												<div class="row">
                                                   <td><font size="2px" style="text-align: left;"><b>Kelurahan   :</font></b></td>
													<td><input type="text" class="form-control"  style="width:400px;  border-radius:4px; height:20px; font-family:Garamond;" id="kelurahan" name="kelurahan" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px" style="text-align: left;"><b>Kecamatan  :</font></b></td>
													<td><input type="text" class="form-control"  style="width:400px;  border-radius:4px; height:20px; font-family:Garamond;" id="kecamatan" name="kecamatan" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px" style="text-align: left;"><b>Kota / Kabupaten  :</font></b></td>
													<td><input type="text" class="form-control"  style="width:400px;  border-radius:4px; height:20px; font-family:Garamond;" id="kotkab" name="kotkab" disabled></td>
												
													</div>
                                                </tr>
												
													<tr>
												<div class="row">
                                                   <td><font size="2px" style="text-align: left;"><b>Provinsi  :</font></b></td>
													<td><input type="text" class="form-control" id="provinsi" style="width:400px;  border-radius:4px; height:20px; font-family:Garamond; " name="provinsi" disabled></td>
												
													</div>
                                                </tr>
												
                                            </table>
												<br>
			
                   
              
                     </div>
                     </div>
					 
					   <button type="submit" name="btn_submit" id="btn_submit" class="btn btn-success btn-lg">Simpan</button>
                    <button type="button" name="btn_kuesioner" id="btn_kuesioner" class="btn btn-info btn-lg">To Kuesioner</button>
					<br>
					</form>
                     </div>
					 
                     </div>
					
                     </div>
	
						<div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
				  </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
                  <div class="table-responsive">
                   <table id="example1" class="table table-striped" style="table-layout:fixed; width:100%;">
				   
                      <thead>
                      <tr>
        <th>No</th>
		<th>Nomor Survey</th>
		<th>Nama Kepala Rumah Tangga</th>
		<th>Nomor KTP Rumah Tinggal</th>
		<th>Alamat Rumah Tinggal </th>
		<th>Aksi</th>
        <th>Modul</th>
        </thead>
        <tbody>
            </tr><?php
            foreach ($rumtinggal_data as $rumtinggal)
            {
                ?>
                <tr>
			<td width="50px"><?php echo ++$start ?></td>
			<td><?php echo $rumtinggal->no_survey ?></td>
			<td><?php echo $rumtinggal->nama_kepalarumahtangga ?></td>
			<td><?php echo $rumtinggal->no_ktp_kepalarumahtangga ?></a></td>
			<td><?php echo $rumtinggal->alamat_rumahtinggal ?></a></td>
			<td style="text-align:center" width="200px">
			       <div class="col-md-4">
            </div>
			
				<?php
                echo anchor(site_url('admin/rumtinggal/baca/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;View', 'class="fas fa-book btn btn-success"');
				echo '<br><br>';
				echo anchor(site_url('admin/rumtinggal/edit/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;Edit', 'class="fas fa-edit btn btn-primary"');
				echo '<br><br>';
				echo anchor(site_url('admin/rumtinggal/hapus/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;Delete', 'class="fas fa-trash btn btn-danger"','onclick="javasciprt: return confirm(\'Yakin Ingin menghapus data ini ?\')"'); 
				echo '</br></br>';
				?>
			</td>
						<td style="text-align:center" width="200px">
				<?php
                echo anchor(site_url('admin/rumtinggal/ptp/'.$rumtinggal->id_rumahtinggal),'PTP'); 
				echo ' | '; 
				echo anchor(site_url('admin/rumtinggal/up2k/'.$rumtinggal->id_rumahtinggal),'UP2K'); 
				echo ' | '; 
				echo anchor(site_url('admin/rumtinggal/industri/'.$rumtinggal->id_rumahtinggal),'Industri','onclick="javasciprt: return confirm(\'Yakin Ingin menghapus data ini ?\')"'); 
				?>
			</td>
			</tr>
                                                <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
					<div></div>
                  </div>
                </div>
              </div>
            </div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<script src="/../assets/js/off-canvas.js"></script>
  <script src="/../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    <style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:green;
   color:white;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color:white;
   color: black;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:blue;
   background-color:#ffff99;
  }
  </style>
	<script>
$(document).ready(function(){
 
 $('#btn_kuesioner').click(function(){

   $('#list_data_details').removeClass('active active_tab1');
   $('#list_data_details').removeAttr('href data-toggle');
   $('#rumting').removeClass('active');
   $('#list_data_details').addClass('inactive_tab1');
   $('#list_kuesioner_details').removeClass('inactive_tab1');
   $('#list_kuesioner_details').addClass('active_tab1 active');
   $('#list_kuesioner_details').attr('href', '#contact_details');
   $('#list_kuesioner_details').attr('data-toggle', 'tab');
   $('#kuesioners').addClass('active in');
  
 });
 
 $('#btn_tambah').click(function(){
  $('#list_kuesioner_details').removeClass('active active_tab1');
  $('#list_kuesioner_details').removeAttr('href data-toggle');
  $('#kuesioners').removeClass('active in');
  $('#list_kuesioner_details').addClass('inactive_tab1');
  $('#list_data_details').removeClass('inactive_tab1');
  $('#list_data_details').addClass('active_tab1 active');
  $('#list_data_details').attr('href', '#personal_details');
  $('#list_data_details').attr('data-toggle', 'tab');
  $('#rumting').addClass('active in');
 });
 
  $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
    
 );
 
});
</script>
	
</body>
</html>
