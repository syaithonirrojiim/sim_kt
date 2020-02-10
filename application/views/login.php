<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login SIM-Kuliah Tamu</title>
	<?php $this->load->view('load_js');?>
	<?php $this->load->view('load_css');?>
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6" style="text-align: center; margin-top: 10%;">
						<img src="<?php echo base_url().'assets/images/umm.png'?>" width=400px;>
						<div style="margin-top: 3%; margin-left: 2%; margin-right: 2%">
							<br />
							
							<form action="<?php echo base_url().'login/auth'?>" method="post">
								<div class="form-group row">
									<div class="offset-2 col-8" align="center">
										<input id="username" name="username" placeholder="USERNAME" type="text" required class="form-control here">
									</div>
								</div>
								<div class="form-group row">
									<div class="offset-2 col-8" align="center">
										<input id="password" name="password" placeholder="PASSWORD" type="password" required class="form-control here">
									</div>
								</div>
								<div class="form-group row">
									<div class="offset-2 col-8">
										<button name="submit" type="submit" class="btn btn-secondary"><b><font style="font-family: Calibry;">Login</font></b></button>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					<div class="col-md-3">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('load_js');?>
</body>

</html>
</html>