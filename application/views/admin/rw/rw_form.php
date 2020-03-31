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
		<style>
									
						#rcorners1 {
							border-radius: 100px;
							border: 1px solid blue;
							padding: 20px;
							height: 150px;  
										}
			</style>
									
   <div class="main-panel">
   <div class="content-wrapper">

            <!-- Content Wrapper. Contains page content -->
            <div class="col-lg-12 grid-margin stretch-card">
              <br>
                  <h5 class="card-title">&nbsp;&nbsp;Data Rumah Tinggal</h5>
		    <div class="card-body">
                  <div class="table-responsive">
				            <form role="form" action="<?php echo base_url()?>index.php/admin/Rumtinggal/tambahdatarumting" method="post">
                    <table id="rcorners1" style="table-layout:fixed; width:100%;">
                                            
                                                <tr>
												<div class="row">
                                                    <td><font size="2px"><b> Nama Dasa Wisma :</font></b></td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:4px;  height:20px; font-family:Garamond; margin-left:10px;" id="nama_dasawisma" name="nama_dasawisma" disabled></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b> No Survey Rumah Tinggal :</font></b></td>
													<td><input type="text" class="form-control <?php echo form_error('no_survey') ? 'is-invalid':'' ?>"  style="width:500px;  border-radius:4px;  height:20px; font-family:Garamond; margin-left:10px;" id="no_survey" name="no_survey" ></td>
												
													</div>
                                                </tr>
                                                 <tr>
												<div class="row">
                                                   <td><font size="2px"><b> Nama Kepala Rumah Tangga :</font></b></td>
													<td><input type="text" class="form-control <?php echo form_error('nama_kepalarumahtangga') ? 'is-invalid':'' ?>"  style="width:500px;  border-radius:4px;  height:20px; font-family:Garamond; margin-left:10px;" id="nama_kepalarumahtangga" name="nama_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
												<tr>
												<div class="row">
                                                   <td><font size="2px"><b> No KTP Kepala Rumah Tangga :</font></b></td>
													<td><input type="text" class="form-control <?php echo form_error('no_ktp_kepalarumahtangga') ? 'is-invalid':'' ?>"  style="width:500px;  border-radius:4px; height:20px; font-family:Garamond; margin-left:10px;" id="no_ktp_kepalarumahtangga" name="no_ktp_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>Alamat Rumah Tinggal :</font></b></td>
													<td><input type="text" class="form-control <?php echo form_error('alamat_kepalarumahtangga') ? 'is-invalid':'' ?>"  style="width:500px;  border-radius:4px; height:20px; font-family:Garamond; margin-left:10px;" id="alamat_rumahtinggal" name="alamat_rumahtinggal"></td>
												
													</div>
                                                </tr>
														<tr>
												<div class="row">
                                                   <td><font size="2px"><b>RT :</font></b></td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:4px; height:20px; font-family:Garamond; margin-left:10px;" id="nama_rt" name="nama_rt" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>RW :</font></b></td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:4px; height:20px; font-family:Garamond; margin-left:10px;" id="nama_rw" name="nama_rw" disabled></td>
												
													</div>
                                                </tr>
											
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>Provinsi :</font></b></td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:4px; height:20px; font-family:Garamond; margin-left:10px;" id="provinsi" name="provinsi" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>Kota/Kabupaten :</font></b></td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:4px; height:20px; font-family:Garamond; margin-left:10px;" id="kotkab" name="kotkab" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>Kecamatan :</font></b></td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:4px; height:20px; font-family:Garamond; margin-left:10px;" id="kecamatan" name="kecamatan" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>Kelurahan :</font></b></td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:4px; height:20px; font-family:Garamond; margin-left:10px;" name="kelurahan" disabled></td>
												
													</div>
                                                </tr>
												
                                            </table>
											
												<br>
											<center>
											   <button type="submit" class="btn btn-success">Simpan</button> 
												<a href="<?php echo site_url('admin/rumtinggal') ?>" class="btn btn-danger">Cancel</a>
												</center>
              
                  </div>
										
				  </div>
                  </div>
                </div>
            </div>
<!-- /#wrapper -->
	<br><br><br>

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<script src="/../assets/js/off-canvas.js"></script>
  <script src="/../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  
	
</body>
</html>
