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
		<!-- Sticky Footer -->

	</div>
	<!-- /.content-wrapper -->

   <div class="main-panel">
   <div class="content-wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="col-lg-12 grid-margin stretch-card"><br>
                 <h5 class="card-title">&nbsp;&nbsp;Data Dasawisma</h5>
				   <br><br>
		 <p align="right">     
                <?php echo anchor(site_url('admin/dasawisma/create'),'&nbsp;&nbsp;Tambah Data Baru', 'class="fas fa-plus btn btn-primary"'); ?>
            </p><!-- Modal -->

                  <div class="table-responsive">
                   <table id="example1" class="table table-striped" style="table-layout:auto; width:1105px; text-align:center;">
				   
                      <thead>
                      <tr>
        <th>No</th>
		<th>Nama Dasawisma</th>
		<th>RT</th>
		<th>RW</th>
		<th>Aksi</th>
        </thead>
        <tbody>
            </tr><?php
            foreach ($variabel_data as $variabel)
            {
                ?>
                <tr>
			<td width="30px"><?php echo ++$start ?></td>
			<td width="200px"><?php echo 'Anggrek' ?></td>
			<td width="60px"><?php echo 'RT 001'?></td>
			<td width="60px"><?php echo 'RW 001'?></a></td>
			<td style="text-align:center" width="300px">
			
			
				<?php
                echo anchor(site_url('admin/dasawisma/baca/'.$variabel->id_dasawisma),'&nbsp;&nbsp;View', 'class="fas fa-book btn btn-success"'.'style="font-size:12px"');
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo anchor(site_url('admin/dasawisma/edit/'.$variabel->id_dasawisma),'&nbsp;&nbsp;Edit', 'class="fas fa-edit btn btn-primary"'.'style="font-size:12px"');
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo anchor(site_url('admin/dasawisma/hapus/'.$variabel->id_dasawisma),'&nbsp;&nbsp;Delete', 'class="fas fa-trash btn btn-danger"'.'style="font-size:12px"'.'onclick="javasciprt: return confirm(\'Yakin Ingin menghapus data ini ?\')"'); 
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