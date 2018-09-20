<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login - SIPAS</title>
		<meta name="description" content="PKL Surat Menyurat">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url()?>dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>dist/css/main.css">

		<script>
			function cekform()
			{
				if(!$('#nip').val())
				{
					alert('Mohon maaf NIP harus diisi');
					$(this).focus();
					return false;
				}
				if(!$('#pass').val())
				{
					alert('Mohon maaf Password harus diisi');
					$(this).focus();
					return false;
				}
			}
		</script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url();?>#">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
		<!-- Login Page -->
		<div class="container" id="c-login">
		<div class="card bg-light">
			<div class="card-body">		
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<img src="<?php echo base_url();?>dist/img/SIPARS.png" alt="Logo Sipas" class="rounded float-left img-thumbnail bg-transparent" style="border: none !important;">	
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="text-center text-secondary">
							<h2>LOGIN</h2>
						</div>

						<?php echo form_open('pages/proses_login');?>
						<form class="mt-4 needs-validation" novalidate>
							<div class="form-group">
								<label for="nip">NIP</label>
								<input type="number" name="nip" id="nip" placeholder="123456789*********" class="form-control"  required>
							</div>
							<div class="form-group">
								<label for="pass">Password</label>
								<input type="password" name="pass" id="pass" placeholder="********" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-primary btn-c mx-auto d-block p-2 text-uppercase" style="width: 150px !important; margin-top: 50px !important; font-weight: bolder;">Login</button>
						</form>
						<?php echo form_close();?>
						
					</div>
			</div>
		</div>
		<!-- Login Page -->

		<script src="dist/js/bootstrap.min.js"></script>

		<script>
			// Validation
			(function() {
			'use strict';
			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
				});
			}, false);
			})();
		</script>
	</body>
</html>