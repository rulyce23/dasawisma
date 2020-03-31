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

	<!-- /.content-wrapper -->
<style>
h5{
	font-family: 'Times-New-Roman';
	font-weight: bold;
}

th {
 font-family: 'Times-New-Roman';
  font-size: 110%;
  font-weight: bold;
}

td {
 font-family: 'Times-New-Roman';
 font-size:110%;
}


p {
 font-family: 'Times-New-Roman';
}


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
                   <table id="rcorners1" style="table-layout:auto; width:100%;">
                                            
                                                <tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Dasa Wisma </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:300px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:20px;" id="nama_dasawisma" name="nama_dasawisma"  disabled></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; No Survey Rumah Tinggal </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:20px;" id="no_survey" name="no_survey"></td>
												
													</div>
                                                </tr>
                                                 <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Nama Kepala Rumah Tangga </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:20px;" id="nama_kepalarumahtangga" name="nama_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
												<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; No KTP Kepala Rumah Tangga </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:20px;" id="no_ktp_kepalarumahtangga" name="no_ktp_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Alamat Rumah Tinggal </font></b></td>
												   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px; height:70px; font-family:Garamond; margin-left:20px;" id="alamat_rumahtinggal" name="alamat_rumahtinggal" ></td>
												
													</div>
                                                </tr>
														<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;RT </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:20px;" id="nama_rt" name="nama_rt" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;RW </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:20px;" id="nama_rw" name="nama_rw" disabled></td>
												
													</div>
                                                </tr>
											
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Provinsi </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:20px;" id="provinsi" name="provinsi" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kota/Kabupaten </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:20px;" id="kotkab" name="kotkab" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kecamatan</font></b></td>
												   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:20px; " id="kecamatan" name="kecamatan" disabled></td>
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kelurahan </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:200px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:20px;" name="kelurahan" disabled></td>
												
													</div>
                                                </tr>
												
                                            </table>
											
											<br><br>
											      <table id="rcorners1" style="table-layout:auto; width:100%;">
                                            
                                                <tr>
												<div class="row">
                                                 <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; NOP (Nomor Objek Pajak Pada PBB) </font></b></td>
														   <td>&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:300px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:50px;" id="nama_dasawisma" name="nama_dasawisma"  ></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Status Rumah Tinggal </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_survey" name="no_survey"></td>
												
													</div>
                                                </tr>
                                                 <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Sertifikat Tanah (rumah milik pribadi) </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:50px;" id="nama_kepalarumahtangga" name="nama_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
												<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Makanan Pokok</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="no_ktp_kepalarumahtangga" name="no_ktp_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jika Bukan Beras, Makanan Pokoknya</font></b></td>
												   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="alamat_rumahtinggal" name="alamat_rumahtinggal" ></td>
												
													</div>
                                                </tr>
														<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Penerapan menu B2SA Sehari - hari  </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="nama_rt" name="nama_rt" ></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Lantai Rumah Tinggal  </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="nama_rw" name="nama_rw" ></td>
												
													</div>
                                                </tr>
											
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kondisi Bangunan Rumah Tinggal </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="provinsi" name="provinsi" ></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Penerangan Rumah  </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="kotkab" name="kotkab" ></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jenis Penerangan</font></b></td>
												   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px; " id="kecamatan" name="kecamatan" ></td>
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jamban </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Tempat Sampah</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Pilah Sampah Rumah Tangga</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Komposting</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>
													<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Saluran buang Air Limbah Rumah</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>
														<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Lubang Serapan Biopori</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>		
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Lubang Serapan</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Menempel Stiker P4K </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>
												
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Sumber Air </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>
												
                                            </table>
											
												<br>
											<center>
											   <button type="submit" class="btn btn-success">Simpan</button> 
												<a href="<?php echo site_url('admin/rumtinggal') ?>" class="btn btn-danger">Batal</a>
												</center>
              
                  </div>
										
				  </div>
				  </div>
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
  
	
</body>
</html>
