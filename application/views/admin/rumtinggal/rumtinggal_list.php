<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>
	
<link href="<?php echo base_url('assets/bootstrap/css/stylelist.css') ?>" rel="stylesheet">

<background color="silver">

		<!-- /.container-fluid -->
 <div class="container-scroller">
<div class="container-fluid page-body-wrapper">
		<!-- Sticky Footer -->

	</div>
	<!-- /.content-wrapper -->

   <div class="main-panel">
   <div class="content-wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="col-lg-12 grid-margin stretch-card">
                 <h5 class="card-title" style="background-color:white;"><b>&nbsp;&nbsp;Data Rumah Tinggal</b></h5>
				   <br>
				        <p align="right">     
                <?php echo anchor(site_url('admin/rumtinggal/create'),'&nbsp;&nbsp;Tambah Data Baru','class="fas fa-plus btn default"','style="font-size:12px"'); ?>
            </p><!-- Modal -->
			 
					<p>
                  <div class="table-responsive">
                   <table id="example1" class="table table-striped" style="table-layout:fixed; width:100%;"> 
                      <thead style="background-color:silver">
                      <tr>
        <th >No</th>
		<th>Nomor Survey</th>
		<th>Nama Kepala Rumah Tangga</th>
		<th>Nomor KTP Rumah Tinggal</th>
		<th>Alamat Rumah Tinggal </th>
		<th >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aksi</th>
        <th>Modul</th>
        </thead>
        <tbody>
            </tr><?php
            foreach ($rumtinggal_data as $rumtinggal)
            {
                ?>
                <tr>
			<td width="60px"><?php echo ++$start ?></td>
			<td><?php echo $rumtinggal->no_survey ?></td>
			<td><?php echo $rumtinggal->nama_kepalarumahtangga ?></td>
			<td><?php echo $rumtinggal->no_ktp_kepalarumahtangga ?></a></td>
			<td width="150px"><?php echo $rumtinggal->alamat_rumahtinggal ?></a></td>
			<td style="text-align:left" width="150px">
			
				<?php
                echo anchor(site_url('admin/rumtinggal/baca/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;&nbsp;View&nbsp;', 'class="fas fa-book btn btn-success"'.'style="font-size:11px"') ;
				echo'<br>';
				echo anchor(site_url('admin/rumtinggal/edit/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;', 'class="fas fa-edit btn btn-primary"'.'style="font-size:11px"');
				echo'<br>';
				echo anchor(site_url('admin/rumtinggal/hapus/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;Delete&nbsp;', 'class="fas fa-trash btn btn-danger"'.'onclick="javasciprt: return confirm(\'Yakin Ingin menghapus data ini ?\')"'.'style="font-size:11px"'); 
				?>
			</td>
						<td style="text-align:left" width="150px">
				<?php
                echo anchor(site_url('admin/rumtinggal/ptp/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PTP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','style="font-size:11px"'.'class="fas fa-book btn btn-info"');
						echo'&nbsp;<br>';
				echo anchor(site_url('admin/rumtinggal/up2k/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;&nbsp;UP2K&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','style="font-size:11px"'.'class="fas fa-book btn btn-info"'); 
						echo'&nbsp;<br>';
				echo anchor(site_url('admin/rumtinggal/industri/'.$rumtinggal->id_rumahtinggal),'&nbsp;&nbsp;Industri&nbsp;&nbsp;','style="font-size:11px"'.'class="fas fa-book btn btn-info"'); 
				?>
			</td>
			</tr>
                                                <?php
                                            }
                                            ?>

                                        </tbody>
										
                                    </table>
					<div>
					</div>
                  </div>
                </div>
              </div>
			</div>
			</div>
			</div></p>
		
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
    
</body>
</html>
