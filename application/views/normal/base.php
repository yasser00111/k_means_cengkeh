<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("root/_partials/head.php") ?>
</head>
<body id="page-top" style="background-color:#e6e6e6;">

<?php $this->load->view("root/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("root/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php $this->load->view("root/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("root/_partials/scrolltop.php") ?>
<?php $this->load->view("root/_partials/modal.php") ?>
<?php $this->load->view("root/_partials/js.php") ?>
    
</body>
</html>
