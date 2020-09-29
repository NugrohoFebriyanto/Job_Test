<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>PT. Majoo Teknologi Indonesia - Product</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Admin Product</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Administrator
			</div>

			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="index.html">
					<i class="fas fa-fw fa-table"></i>
					<span>List Product</span></a>
			</li>

			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="index.html">
					<i class="fas fa-fw fa-table"></i>
					<span>List Order Product</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
								<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">List Product</h1>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Product PT. Majoo Teknologi Indonesia</h6>
						</div>
						<div class="card-footer clearfix">
							<button type="button" class="btn btn-info float-left" data-toggle="modal" data-target="#modal-add-product">
								<i class="fas fa-plus"></i> Add Product
							</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID_Product</th>
											<th>Name</th>
											<th>Price</th>
											<th>Description</th>
											<th>Image</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($product as $key => $value) : ?>
											<tr>
												<td><?= $value->id_product ?></td>
												<td><?= $value->product_name ?></td>
												<td><?= $value->product_price ?></td>
												<td><?= $value->product_desc ?></td>
												<td><img src="<?= base_url() ?>assets/foto/<?= $value->product_img ?>" alt="" width=100 height=100></td>

												<td>
													<button type="button" class="badge btn-warning" data-toggle="modal" data-target="#modal-edit-product-<?= $value->id_product; ?>">
														<i class="fas fa-pen"></i> Edit
													</button>
													<button type="button" class="badge btn-danger" name="delete" value="<?= $value->id_product; ?>">
														<i class="fas fa-trash"></i> Delete
													</button>
												</td>

											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->
			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright Nugroho Febriyanto_Test Case_PT. Majoo Teknologi Indonesia 2020</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<!-- Modal Add-->
	<div class="modal fade" id="modal-add-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myModalLabel">New Product</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?= form_open_multipart('admin/add_product') ?>
					<div class="form-group">
						<label for="product_name" class="col-form-label">Product Name:</label>
						<input type="text" class="form-control form-control-user" id="product_name" name="product_name" placeholder="Enter Product Name..." value="<?= set_value('product_name'); ?>">
						<?= form_error('product_name', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="product_price" class="col-form-label">Product Price:</label>
						<input type="number" class="form-control form-control-user" id="product_price" name="product_price" placeholder="Enter Product Price...">
						<?= form_error('product_price', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="product_desc" class="col-form-label">Product Description:</label>
						<input type="text" class="form-control form-control-user" id="product_desc" name="product_desc" placeholder="Enter Product Description..." value="<?= set_value('product_name'); ?>">
						<?= form_error('product_desc', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="product_img" class="col-form-label">Product Image</label>
						<input type="file" class="form-control-file" id="product_img" name="product_img">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" id="btn_Add">Add Product</button>
					</div>
					<?= form_close() ?>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php foreach ($product as $key => $value2) : ?>
		<!-- Modal Edit-->
		<div class="modal fade" id="modal-edit-product-<?= $value2->id_product; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel">Edit Product</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?= form_open_multipart('admin/edit_product') ?>
						<input type="hidden" id="edit_id_product" name="edit_id_product" value="<?= $value2->id_product; ?>">
						<div class="form-group">
							<label for="product_name" class="col-form-label">Product Name:</label>
							<input type="text" class="form-control form-control-user" id="edit_product_name" name="edit_product_name" placeholder="Enter Product Name..." value="<?= $value2->product_name; ?>">
							<?= form_error('product_name', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="product_price" class="col-form-label">Product Price:</label>
							<input type="number" class="form-control form-control-user" id="edit_product_price" name="edit_product_price" placeholder="Enter Product Price..." value="<?= $value2->product_price; ?>">
							<?= form_error('product_price', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="product_desc" class="col-form-label">Product Description:</label>
							<input type="text" class="form-control form-control-user" id="edit_product_desc" name="edit_product_desc" placeholder="Enter Product Description..." value="<?= $value2->product_desc; ?>">
							<?= form_error('product_desc', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="product_img" class="col-form-label">Product Image</label>
							<input type="file" class="form-control-file" id="edit_product_img" name="edit_product_img">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" id="btn_save">Edit Product</button>
						</div>
						<?= form_close() ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?= base_url('auth'); ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>
	<script type="text/javascript">
		$('form#add_product').submit(function(e) {
			e.preventDefault();
			var formData = new FormData($('form#add_product')[0]);

			$.ajax({
				url: '<?= site_url('admin/add_product'); ?>',
				type: 'POST',
				data: formData,

				cache: false,
				contentType: false,
				processData: false,

				success: function(response) {

					if (response = 'true') {
						alert('berhasil');
						location.reload();
					} else {
						alert('error : ' + response);
					}

				}
			});
		});

		$('form#edit_product').submit(function(e) {
			e.preventDefault();
			var formData = new FormData($('form#edit_product')[0]);

			$.ajax({
				url: '<?php echo site_url('admin/edit_product'); ?>',
				type: 'POST',
				data: formData,

				cache: false,
				contentType: false,
				processData: false,

				success: function(response) {

					if (response) {
						alert('berhasil');
						location.reload();
					} else {
						alert('error : ' + response);
					}

				}
			});
		});

		$('[name="delete"]').click(function(e) {
			e.preventDefault();
			var id = $(this).attr('value')
			//alert(id);
			$.ajax({
				url: '<?php echo site_url('admin/delete_product') ?>',
				type: 'post',
				data: {
					id: id
				},
				success: function(response) {
					//alert(response);
					if (response) {
						alert('berhasil');
						location.reload();
					} else {
						alert('error : ' + response);
					}

				}
			});
		});
	</script>
</body>

</html>
