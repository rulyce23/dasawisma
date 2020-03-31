<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

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
                  <h5 class="card-title">&nbsp;&nbsp;Industri Rumah Tangga</h5>
		    <div class="card-body">
                  <div class="table-responsive">
				            <form role="form" action="<?php echo base_url()?>index.php/admin/Rumtinggal/tambahdatarumting" method="post">
                   <table id="rcorners1" style="table-layout:auto; width:100%;">
                                            
                                                <tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Dasa Wisma </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:50px;" id="nama_dasawisma" name="nama_dasawisma"  disabled></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; No Survey Rumah Tinggal </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_survey" name="no_survey" disabled></td>
												
													</div>
                                                </tr>
                                                 <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Nama Kepala Rumah Tangga </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:50px;" id="nama_kepalarumahtangga" name="nama_kepalarumahtangga" disabled></td>
												
													</div>
                                                </tr>
												<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; No KTP Kepala Rumah Tangga </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="no_ktp_kepalarumahtangga" name="no_ktp_kepalarumahtangga" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Alamat Rumah Tinggal </font></b></td>
												   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:70px; font-family:Garamond; margin-left:50px;" id="alamat_rumahtinggal" name="alamat_rumahtinggal" disabled></td>
												
													</div>
                                                </tr>
														<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;RT </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="nama_rt" name="nama_rt" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;RW </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="nama_rw" name="nama_rw" disabled></td>
												
													</div>
                                                </tr>
											
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Provinsi </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="provinsi" name="provinsi" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kota/Kabupaten </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="kotkab" name="kotkab" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kecamatan</font></b></td>
												   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px; " id="kecamatan" name="kecamatan" disabled></td>
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kelurahan </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" disabled></td>
												
													</div>
                                                </tr>
												
                                            </table>
											
											<br><br>
											      <table id="rcorners1" style="table-layout:auto; width:50%;" align="left">
                                            
                                                <tr>
											
                                                 <td bgcolor="blue"><font size="3px" color="white"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 &nbsp;Kategori </font></b></td>
														  <td  bgcolor="blue"></td>
												<td  bgcolor="blue"><font size="3px" color="white"><b>Ya/Tidak </font></b></td>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Pangan </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style=" border-radius:2px;  height:20px; font-family:Garamond;" id="no_survey" name="no_survey"></td>
												
													</div>
                                                </tr>
                                                 <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Sandang </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style="border-radius:2px;  height:20px; font-family:Garamond;" id="nama_kepalarumahtangga" name="nama_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
												<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Jasa</font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style=" border-radius:2px; height:20px; font-family:Garamond; " id="no_ktp_kepalarumahtangga" name="no_ktp_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
												
                                            </table>

														      <table id="rcorners1" style="table-layout:auto; width:48%;" align="right">
                                            
                                                <tr>
											
                                                 <td bgcolor="blue"><font size="3px" color="white"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Komoditi </font></b></td>
												</tr>
                                                <tr>
												<div class="row">
                                                 	<td><input type="text" class="form-control"  style=" border-radius:2px;  height:20px; font-family:Garamond;" id="no_survey" name="no_survey"></td>
												
													</div>
                                                </tr>
                                                 <tr>
												<div class="row">
                                                 	<td><input type="text" class="form-control"  style="border-radius:2px;  height:20px; font-family:Garamond;" id="nama_kepalarumahtangga" name="nama_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
												<tr>
												<div class="row">
                                                	<td><input type="text" class="form-control"  style=" border-radius:2px; height:20px; font-family:Garamond; " id="no_ktp_kepalarumahtangga" name="no_ktp_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
												
                                            </table>

												<br><br><br>
  </div>
										
				  </div>
                  </div>
                </div>
            </div>
															<center>
											  <button type="submit" class="btn btn-success">Simpan</button> 
												<a href="<?php echo site_url('admin/rumtinggal') ?>" class="btn btn-danger">Batal</a>
												</center>
												
											
										
											 
              
                
<!-- /#wrapper -->
	<br><br><br>
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
