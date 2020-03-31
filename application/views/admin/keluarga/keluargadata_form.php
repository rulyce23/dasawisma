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

	</div>
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
							height: 160px;  
										}

#rcorners2 {
							border-radius: 100px;
							border: 1px solid blue;
							padding: 20px;
							height: 60px;  
										}

</style>
									
   <div class="main-panel">
   <div class="content-wrapper">

            <!-- Content Wrapper. Contains page content -->
            <div class="col-lg-12 grid-margin stretch-card">
              <br>
                  <h5 class="card-title">&nbsp;&nbsp;Data Keluarga</h5>
		    <div class="card-body">
                  <div class="table-responsive">
				            <form role="form" action="<?php echo base_url()?>index.php/admin/keluarga/tambahdatakel" method="post">
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
												<br>
											         <table id="rcorners2" style="table-layout:auto; width:100%;">
													  <tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No KK </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_KK" name="no_KK"></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Nama Kepala Keluarga </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="nama_kepalakeluarga" name="nama_kepalakeluarga"></td>
												
													</div>
                                                </tr>
												</table>
												<br>
												         <table>
													  <tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Anggota Keluarga </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_KK" name="no_KK"></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laki-Laki </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="nama_kepalakeluarga" name="nama_kepalakeluarga"></td>
												
													</div>
                                                </tr>
												   <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Perempuan </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="nama_kepalakeluarga" name="nama_kepalakeluarga"></td>
												
													</div>
                                                </tr>
												  <tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Balita </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_KK" name="no_KK"></td>
                                                    </div>
                                                </tr>
													  <tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah PUS</font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_KK" name="no_KK"></td>
                                                    </div>
                                                </tr>	  <tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Bumil </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_KK" name="no_KK"></td>
                                                    </div>
                                                </tr>	  
												<tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Ibu Menyusui </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_KK" name="no_KK"></td>
                                                    </div>
                                                </tr>
												<tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Lansia </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_KK" name="no_KK"></td>
                                                    </div>
                                                </tr>
												
												<tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah 3 Buta </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:1px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_KK" name="no_KK"></td>
                                                    </div>
                                                </tr>
												</table>
												<br>
											<center>
											   <button type="submit" class="btn btn-success">Simpan</button> 
												<a href="<?php echo site_url('admin/keluarga/hapusdatakel') ?>" class="btn btn-warning">Hapus</a>
												<a href="<?php echo site_url('admin/keluarga') ?>" class="btn btn-danger">Batal</a>
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
