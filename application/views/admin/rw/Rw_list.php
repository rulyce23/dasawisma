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
                  <h5 class="card-title">&nbsp;&nbsp;Master RW</h5>
				     <br><br>
        <p align="right">     
                <?php echo anchor(site_url('admin/rw/create'),'&nbsp;&nbsp;Tambah Data Baru', 'class="fas fa-plus btn btn-primary"'); ?>
            </p><!-- Modal -->

                  <div class="table-responsive">
                   <table id="example1" class="table table-striped" style="table-layout:fixed; width:100%;">
				   
                      <thead>
                      <tr>
        <th>No</th>
		<th>Nama Dasawisma</th>
		<th>RW</th>
		<th>RT</th>
		<th>Aksi</th>
        </thead>
        <tbody>
            </tr><?php
            foreach ($rw_data as $rw)
            {
                ?>
                <tr>
			<td width="50px"><?php echo ++$start ?></td>
			<td><?php echo 'Anggrek' ?></td>
			<td><?php echo '1'?></td>
			<td width="230px"><?php echo '1'?></a></td>
			<td style="text-align:left" width="300px">
			
				<?php
                echo anchor(site_url('admin/rw/baca/'.$rw->id_RW),'&nbsp;&nbsp;View', 'class="fas fa-book btn btn-success"'.'style="font-size:12px"');
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo anchor(site_url('admin/rw/edit/'.$rw->id_RW),'&nbsp;&nbsp;Edit', 'class="fas fa-edit btn btn-primary"'.'style="font-size:12px"');
				echo '&nbsp;&nbsp;&nbsp;&nbsp;';
				echo anchor(site_url('admin/rw/hapus/'.$rw->id_RW),'&nbsp;&nbsp;Delete', 'class="fas fa-trash btn btn-danger"'.'style="font-size:12px"'.'onclick="javasciprt: return confirm(\'Yakin Ingin menghapus data ini ?\')"'); 
				echo '</br>';
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
