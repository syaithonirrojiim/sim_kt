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
						<div class="card" style="border-style: double; margin-top: 1%; margin-bottom: 5%">
							<div class="card-text" align="center" style="margin-right: 2%; margin-left: 2%; margin-top: 2%">
								<font style="font-family: Bahnschrift Condensed; font-size: 23px; color: #b30000; font-weight: bold">
									Data Admin/Dosen
								</font>
								<table class="table table-dark table-hover" style="border-style: double;">
									<thead>
										<tr>
											<th>Nama</th>
											<th>NIP/NIDN</th>
											<th>No Hp</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($admin as $member): ?>
											<tr>
												<td width="30%">
													<?php echo $member->nama ?>
												</td>
												<td width="20%">
													<?php echo $member->username ?>
												</td>
												<td width="20%">
													<?php echo $member->hp ?>
												</td>
												<td width="15%">
													<?php if ($member->level == 1) {
														echo "Super Admin";
													}elseif ($member->level == 2) {
														echo "Dosen IT";
													}?>
												</td>
												<td width="12%">
													<a href="<?php echo site_url('page/edit_min/'.$member->id_user) ?>" ><img src="../assets/img/up.png" title="edit"></a>
													<a href="<?php echo site_url('page/delete_min/'.$member->id_user) ?>" ><img src="../assets/img/del.png" title="delete"></a>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>

							<div align="right" class="mb-3" style="margin-right:20px">
								<a href="<?php echo base_url().'page/add_admin'; ?>">
									<button type="button" class="btn btn-success">
										<font style="font-family: Bahnschrift Condensed;">
											Input Data Dosen
										</font>
									</button>
								</a>
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
