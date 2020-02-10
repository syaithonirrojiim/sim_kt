<!DOCTYPE html>
<html>
<head>
	<title>SIM-KULIAH TAMU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="By analysis.alienasi.com" />
	<!--Include Bootstrap-->
	<?php $this->load->view('load_css');?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div align="right">
					<a class="nav-link" href="<?php echo base_url().'login/logout'; ?>"><img src="<?php echo base_url().'assets/images/logout.png'?>" width="3%" title="Login"/></a>

				</div>

				<div class="row" align="center">
					<div class="col-md-12" style="margin-top: 1%">
						<br />
						<a href="<?php echo base_url()?>"><img src="<?php echo base_url().'assets/images/umm.png'?>" width="20%"></a>
						<br />
						<font style="font-weight: bold; font-family: Bahnschrift Condensed; color: #b30000; font-size: 25px;">Sistem Informasi Manajemen Kuliah Tamu<br/>Program Studi Informatika</font>
						<br /><br />
						<div class="col-md-2"></div>
						<div class="col-md-8" align="right" style="margin-right: 2%">
							<?php $this->load->view('menu');
							?>
							<!--Include menu-->
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
						<div class="card" style="border-style: double; margin-top: 1%; margin-bottom: 3%; margin-right: 2%; margin-left: 2%">
							<div class="card-text" align="center" style="margin-right: 2%; margin-left: 2%; margin-top: 3%">
								<font style="font-family: Bahnschrift Condensed; font-size: 23px; color: #b30000; font-weight: bold">
									Input Data Baru Kuliah Tamu
								</font>
								<br /><br />
								<form action="<?php echo base_url().'page/kt_xecution'; ?>" method="post">
									<div class="form-group row">
										<div class="offset-2 col-8" align="center">
											<input id="kuliah" name="kuliah" placeholder="TEMA KULIAH TAMU" type="text" required class="form-control here">
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-2 col-8" align="center">
											<input id="waktu" name="waktu" placeholder="JADWAL KULIAH TAMU" type="date" required class="form-control here">
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-2 col-8" align="center">
											<input id="tempat" name="tempat" placeholder="TEMPAT" type="text" required class="form-control here">
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-2 col-8" align="center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
												<label class="form-check-label" for="invalidCheck"> Agree to terms and conditions </label>
												<div class="invalid-feedback"> You must agree before submitting. </div>
											</div>
										</div>
									</div>
									<div class="form-group row" style="margin-bottom: 4%">
										<div class="offset-2 col-8">
											<button name="submit" type="submit" class="btn btn-success">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-2" style="margin-top:2%">
					</div>
				</div>
			</div>
		</div>

	</div>    
</div>
</div>
<!-- /container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php $this->load->view('load_js');?>
</body>
</html>
