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

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>


		<!-- /.container-fluid -->
 <div class="container-scroller">
<div class="container-fluid page-body-wrapper">
		<!-- Sticky Footer -->
	</div>
	<!-- /.content-wrapper -->

   <div class="main-panel">
   <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card"><br>
                  <h5 class="card-title">&nbsp;&nbsp;Data Keluarga</h5>
				  <br>
                  <div class="table-responsive">
                   <table id="rcorners1" style="table-layout:auto; width:100%;">
                                            
                                                <tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Dasa Wisma </font></b></td>
														   <td>:</td>
												<td><input type="text" class="form-control" style="width:500px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:50px;" id="nama_dasawisma" name="nama_dasawisma"  disabled></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; No Survey Rumah Tinggal </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:50px;" id="no_survey" name="no_survey" disabled></td>
												
													</div>
                                                </tr>
                                                 <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Nama Kepala Rumah Tangga </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px;  height:20px; font-family:Garamond; margin-left:50px;" id="nama_kepalarumahtangga" name="nama_kepalarumahtangga" disabled></td>
												
													</div>
                                                </tr>
												<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; No KTP Kepala Rumah Tangga </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="no_ktp_kepalarumahtangga" name="no_ktp_kepalarumahtangga" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Alamat Rumah Tinggal </font></b></td>
												   <td>:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:70px; font-family:Garamond; margin-left:50px;" id="alamat_rumahtinggal" name="alamat_rumahtinggal" disabled></td>
												
													</div>
                                                </tr>
														<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;RT </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="nama_rt" name="nama_rt" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;RW </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="nama_rw" name="nama_rw" disabled></td>
												
													</div>
                                                </tr>
											
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Provinsi </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="provinsi" name="provinsi" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kota/Kabupaten </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" id="kotkab" name="kotkab" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kecamatan</font></b></td>
												   <td>:</td>
													<td><input type="text" class="form-control"  style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px; " id="kecamatan" name="kecamatan" disabled></td>
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kelurahan </font></b></td>
												   	   <td>:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:500px;  border-radius:2px; height:20px; font-family:Garamond; margin-left:50px;" name="kelurahan" disabled></td>
												
													</div>
                                                </tr>
												
                                            </table>
              
                  </div>
										
				  </div>

            <!-- Content Wrapper. Contains page content -->
            <div class="col-lg-12 grid-margin stretch-card">
			<br>
			<p align="right">     
                <?php echo anchor(site_url('admin/keluarga/create'),'&nbsp;&nbsp;Tambah Data Baru','class="fas fa-plus btn btn-primary"','style="font-size:12px"'); ?>
            </p><!-- Modal -->

                  <div class="table-responsive">
                <table id="example1" class="table table-striped">
                      <thead>
                      <tr>
        <th><center>No</center></th>
		<th><center>Nomor KK</center></th>
		<th><center>Nama Kepala Keluarga</center></th>
		<th><center>Aksi</center></th>
        </thead>
        <tbody>
            </tr><?php
            foreach ($keluarga_data as $rumtinggal)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td width="350px"><?php echo $rumtinggal->no_KK ?></td>
			<td width="350px"><?php echo $rumtinggal->nama_kepalakeluarga ?></td>
			<td style="text-align:center" width="540px">
							<?php
                echo anchor(site_url('admin/keluarga/baca/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;View', 'class="fas fa-book btn btn-success"'.'style="font-size:12px"');
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo anchor(site_url('admin/keluarga/edit/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;Edit', 'class="fas fa-edit btn btn-primary"'.'style="font-size:12px"');
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo anchor(site_url('admin/keluarga/hapus/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;Delete', 'class="fas fa-trash btn btn-danger"'.'style="font-size:12px"'.'onclick="javasciprt: return confirm(\'Yakin Ingin menghapus data ini ?\')"'); 
				echo '</br>';
				?>
			</td>
	
			</tr>
                                                <?php
                                            }
                                            ?>

                                        </tbody>
                                    </table>
					<div>&nbsp;</div>
                  </div>
                </div>
              </div>
            </div>
<!-- /#wrapper -->
<br><br><br><br><br>


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
    
</body>
</html>
