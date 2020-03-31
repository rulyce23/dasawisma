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

</style>
		<!-- /.container-fluid -->
 <div class="container-scroller">
<div class="container-fluid page-body-wrapper">

	</div>
	<!-- /.content-wrapper -->

   <div class="main-panel">
   <div class="content-wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="col-lg-12 grid-margin stretch-card"><br>
                 <h5 class="card-title">&nbsp;&nbsp;Data Rumah Tinggal</h5>
				   <br><br>
				 
                  <div class="table-responsive">
                   <table id="example1" class="table table-striped" style="table-layout:fixed; width:100%;"> 
                      <thead>
                      <tr>
        <th>No</th>
		<th>Nomor Survey</th>
		<th>Nama Kepala Rumah Tangga</th>
		<th>Alamat Rumah Tinggal </th>
		<th>Aksi</th>
        </thead>
        <tbody>
            </tr><?php
            foreach ($keluarga_data as $rumtinggal)
            {
                ?>
                <tr>
			<td style="table-layout:fixed; width:100%;"><?php echo ++$start ?></td>
			<td style="table-layout:fixed; width:100%;"><?php echo $rumtinggal->no_survey ?></td>
			<td style="table-layout:fixed; width:100%;"><?php echo $rumtinggal->nama_kepalarumahtangga ?></td>
			<td style="table-layout:fixed; width:100%;"><?php echo $rumtinggal->alamat_rumahtinggal ?></td>
			<td style="table-layout:fixed; text-align-center; width:100%;">
				<?php
       
                echo anchor(site_url('admin/keluarga/keluargadata'),'&nbsp;&nbsp;Data Keluarga','class="fas fa-list btn btn-primary"'.'style="font-size:12px"'); 
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
    
</body>
</html>
