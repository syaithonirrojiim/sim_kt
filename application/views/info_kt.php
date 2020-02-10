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
									Data Kuliah Tamu
								</font>
								<table class="table table-dark table-hover" style="border-style: double;">
									<thead>
										<tr>
											<th>Nama Kuliah Tamu</th>
											<th>Waktu</th>
											<th>Tempat</th>
											<th><center>Ubah Status<font style="color: #b30000; font-weight: bold;">*</font></center></th>
											<th><center>Kelola</center></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($info_kt as $member): ?>
											<tr>
												<td width="30%">
													<?php echo $member->kuliah ?>
												</td>
												<td width="20%">
													<?php echo $member->waktu ?>
												</td>
												<td width="20%">
													<?php echo $member->tempat ?>
												</td>
												<td> <center>
													<?php if(($member->status) == 1){
														echo anchor('page/kosong/'.$member->id_info_kt,'<img src="../assets/images/sudah.png">'); } if(($member->status) == 0){ echo anchor('page/isi/'.$member->id_info_kt,'<img src="../assets/images/belum.png">'); }?>

													</center></td>

													<td width="12%">
														<center>
															<a href="<?php echo site_url('page/ubah_kt/'.$member->id_info_kt) ?>" ><img src="../assets/img/up.png" title="edit"></a>
															<a href="<?php echo site_url('page/hapus_kt/'.$member->id_info_kt) ?>" ><img src="../assets/img/del.png" title="delete"></a>
														</center>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>

								<div align="right" class="mb-3" style="margin-right:20px">
									<a href="<?php echo base_url().'page/add_kt'; ?>">
										<button type="button" class="btn btn-success">
											<font style="font-family: Bahnschrift Condensed;">
												Input Kuliah Tamu
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
