<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>

</head>

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

   <div class="main-panel">   <div class="content-wrapper">
            <!-- Content Wrapper. Contains page content -->
	<div class="col-lg-12 grid-margin stretch-card">
              <br>
                  <h5 class="card-title">&nbsp;&nbsp;Master Data Variabel</h5>
				     <br><br>
				         <p align="right">     
                <?php echo anchor(site_url('admin/variabel/create'),'&nbsp;&nbsp;Tambah Data Baru', 'class="fas fa-plus btn btn-primary"'.'style="font-size:12px"'); ?>
            </p><!-- Modal -->

                  <div class="table-responsive">
                   <table id="example1" class="table table-striped" style="table-layout:auto; width:100%;">
                      <thead>
                      <tr>
        <th>No</th>
		<th>Kategori</th>
		<th>Jumlah Variabel</th>
		<th>Aksi</th>
        </thead>
        <tbody>
            </tr><?php
            foreach ($variabel_data as $variabel)
            {
                ?>
                <tr>
			<td width="100px"><?php echo ++$start ?></td>
			<td width="260px"><?php echo $variabel->kategori ?></td>
			<td width="200px" ><a href='<?php echo base_url()?>index.php/Variabel/tambahvar"'><?php echo '1' ?></a></td>
			<td style="text-align:center" width="450px">
				<?php
				echo anchor(site_url('admin/variabel/view/'.$variabel->id_kategori),'&nbsp;&nbsp;View&nbsp;&nbsp;','class="fas fa-book btn btn-info"'.'style="font-size:12px"');
				echo '&nbsp;&nbsp;  '; 
                echo anchor(site_url('admin/variabel/tambahkat/'.$variabel->id_kategori),'&nbsp;&nbsp;New&nbsp;&nbsp;','class="fas fa-plus btn btn-primary"'.'style="font-size:12px"');
				echo '&nbsp;&nbsp;  '; 
				echo anchor(site_url('admin/variabel/edit/'.$variabel->id_kategori),'&nbsp;&nbsp;Edit&nbsp;&nbsp;','class="fas fa-edit btn btn-success"'.'style="font-size:12px"');
				echo '&nbsp;&nbsp; '; 
				echo anchor(site_url('admin/variabel/hapus/'.$variabel->id_kategori),'&nbsp;Delete','onclick="javasciprt: return confirm(\'Yakin Ingin menghapus data ini ?\')"'.'class="fas fa-trash btn btn-danger"'.'style="font-size:12px"'); 
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
			</center>
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
