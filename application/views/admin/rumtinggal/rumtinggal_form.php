<!DOCTYPE html>
<html lang="en">
<head>

	<?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>
	
<link href="<?php echo base_url('assets/bootstrap/css/styleform.css') ?>" rel="stylesheet">

		<!-- /.container-fluid -->
 <div class="container-scroller">

	<!-- /.content-wrapper -->
				
   <div class="main-panel">
   <div class="content-wrapper">
         <!-- Content Wrapper. Contains page content -->
            <div class="col-lg-12 grid-margin stretch-card">
					 <div class="panel panel-default">
				<div class="panel-heading panel-heading-custom">
                 <h5 class="card-title"><b>&nbsp;&nbsp;Data Rumah Tinggal</b></h5>
				 </div>
<center>
		    <div class="card-body">
                  <div class="table-responsive">
				            <form role="form" class="form-horizontal" action="<?php echo base_url()?>index.php/admin/Rumtinggal/tambahdatarumting" method="post">
                   <table id="rcorners1" style="table-layout:auto; width:100%;">
                                                <tr>
												<div class="row">
                                                    <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Dasa Wisma </font></b></td>
														   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
												<td><input type="text" class="form-control" style="width:300px;  border-radius:2px;  height:20px; font-family:tahoma; margin-left:20px;" id="nama_dasawisma" name="nama_dasawisma"  disabled></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; No Survey Rumah Tinggal </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px;  height:20px; font-family:tahoma; margin-left:20px;" id="no_survey" name="no_survey"></td>
												
													</div>
                                                </tr>
                                                 <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Nama Kepala Rumah Tangga </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px;  height:20px; font-family:tahoma; margin-left:20px;" id="nama_kepalarumahtangga" name="nama_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
												<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; No KTP Kepala Rumah Tangga </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="number" class="form-control"  style="width:300px;  border-radius:2px; height:20px; font-family:tahoma; margin-left:20px;" id="no_ktp_kepalarumahtangga" name="no_ktp_kepalarumahtangga"></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Alamat Rumah Tinggal </font></b></td>
												   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:300px;  border-radius:2px; height:70px; font-family:tahoma; margin-left:20px;" id="alamat_rumahtinggal" name="alamat_rumahtinggal" ></td>
												
													</div>
                                                </tr>
														<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;RT </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="number" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:tahoma; margin-left:20px;" id="nama_rt" name="nama_rt" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;RW </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="number" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:tahoma; margin-left:20px;" id="nama_rw" name="nama_rw" disabled></td>
												
													</div>
                                                </tr>
											
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Provinsi </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:tahoma; margin-left:20px;" id="provinsi" name="provinsi" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kota/Kabupaten </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:tahoma; margin-left:20px;" id="kotkab" name="kotkab" disabled></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kecamatan</font></b></td>
												   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control"  style="width:200px;  border-radius:2px; height:20px; font-family:tahoma; margin-left:20px; " id="kecamatan" name="kecamatan" disabled></td>
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kelurahan </font></b></td>
												   	   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
													<td><input type="text" class="form-control" id="kelurahan" style="width:200px;  border-radius:2px; height:20px; font-family:tahoma; margin-left:20px;" name="kelurahan" disabled></td>
												
													</div>
                                                </tr>
												
                                            </table>
											
											<br><br>
											      <table id="rcorners1">
                                            
                                                <tr>
												<div class="row">
                                                 <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; NOP (Nomor Objek Pajak Pada PBB) </font></b></td>
														   <td>&nbsp;&nbsp;:</td>
												<td><input type="number" class="form-control" style="width:300px;  border-radius:2px;  height:20px; font-family:tahoma; margin-left:50px;" id="nama_dasawisma" name="nama_dasawisma"  ></td>
                                                    </div>
                                                </tr>
                                                <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Status Rumah Tinggal </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>
													
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													   <input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Milik Pribadi/Keluarga</label>
														&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Sewa/Kontrak</label></td>
												
													</div>
                                                </tr>
												
												
                                                 <tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Sertifikat Tanah (rumah milik pribadi) </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><select style="width:300px;  border-radius:2px;  height:35px; font-family:tahoma; margin-left:50px;" id="status" class="form-control" name="status">
													<option selected>--Pilih Sertifikat Tanah--</option>
													<option value="SHM">SHM</option>
													<option value="AJB">AJB</option>
													<option value="HGB">HGB</option>
													<option value="Girik">Girik</option>
													<option value="Tidak Ada">Tidak Ada</option>
													</select></td>
												
													</div>
                                                </tr>
												<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp; Makanan Pokok</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													   <input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Beras</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Non Beras</label></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jika Bukan Beras, Makanan Pokoknya</font></b></td>
												   <td>&nbsp;&nbsp;:</td>
													<td><select style="width:300px;  border-radius:2px;  height:35px; font-family:tahoma; margin-left:50px;" id="status" class="form-control" name="status">
													<option selected>--Pilih Makanan Pokok--</option>
													<option value="Gandum">Gandum</option>
													<option value="Umbi-umbian">Umbi-umbian</option>
													<option value="Jagung">Jagung</option>
													<option value="Sagu">Sagu</option>
													</select></td>
												
													</div>
                                                </tr>
														<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Penerapan menu B2SA Sehari - hari  </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Ya</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Tidak</label></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Lantai Rumah Tinggal  </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><select style="width:300px;  border-radius:2px;  height:35px; font-family:tahoma; margin-left:50px;" id="status" class="form-control" name="status">
													<option selected>--Pilih Jumlah Lantai--</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													</select></td>
												
													</div>
                                                </tr>
											
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kondisi Bangunan Rumah Tinggal </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Sehat</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Kurang Sehat</label></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Penerangan Rumah  </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Bagus</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Kurang</label></td>
												
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jenis Penerangan</font></b></td>
												   <td>&nbsp;&nbsp;:</td>
													<td><select style="width:300px;  border-radius:2px;  height:35px; font-family:tahoma; margin-left:50px;" id="status" class="form-control" name="status">
													<option selected>--Pilih Jenis Penerangan--</option>
													<option value="Lampu Putih">Lampu Putih</option>
													<option value="Lampu Bohlam">Lampu Bohlam</option>
													<option value="Kedua Jenis Lampu">Kedua Jenis Lampu</option>
													</select></td>
													</div>
                                                </tr>
													<tr>
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jamban </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Ada</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Tidak Ada</label></td>
												
													</div>
                                                </tr>
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Tempat Sampah</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Ada</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Tidak Ada</label></td>
												
													</div>
                                                </tr>
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Pilah Sampah Rumah Tangga</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Ada</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Tidak Ada</label></td>
												
													</div>
                                                </tr>
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Komposting</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Ada</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Tidak Ada</label></td>
												
													</div>
                                                </tr>
													<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Saluran buang Air Limbah Rumah</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Ada</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Tidak Ada</label></td>
												
													</div>
                                                </tr>
														<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Lubang Serapan Biopori</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Ada</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Tidak Ada</label></td>
												
													</div>
                                                </tr>		
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Lubang Serapan</font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><input type="number" class="form-control" id="kelurahan" style="width:300px;  border-radius:2px; height:20px; font-family:tahoma; margin-left:50px;" name="kelurahan" ></td>
												
													</div>
                                                </tr>
												<tr>
															<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Menempel Stiker P4K </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="nama_dasawisma" name="nama_dasawisma" type="radio"  class="" />
														<label for="nama_dasawisma" class="">Ada</label>
														&nbsp;&nbsp;&nbsp;&nbsp;
													<input id="nama_dasawisma" name="nama_dasawisma" type="radio" class="" />
													<label for="nama_dasawisma" class="">Tidak Ada</label></td>
												
													</div>
                                                </tr>
												
												<div class="row">
                                                   <td><font size="2px"><b>&nbsp;&nbsp;&nbsp;&nbsp;Sumber Air </font></b></td>
												   	   <td>&nbsp;&nbsp;:</td>
													<td><select style="width:300px;  border-radius:2px;  height:35px; font-family:tahoma; margin-left:50px;" id="status" class="form-control" name="status">
													<option selected>--Pilih Sumber Air Keluarga--</option>
													<option value="PDAM">PDAM</option>
													<option value="Sumur">Sumur</option>
													<option value="Sungai">Sungai</option>
													<option value="Air hujan">Air hujan</option>
													</select></td>
												
													</div>
                                                </tr>
												
                                            </table>
											
												<br>
											   <button type="submit" class="btn btn-dark">Simpan</button> 
												<a href="<?php echo site_url('admin/rumtinggal') ?>" class="btn btn-default">Batal</a>
												<br>
												<br>
												<br>
												<br>
                  </div>
										</form>
				
				  </div>
				
				</div>						</center>
              
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
