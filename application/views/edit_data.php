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
								<?php foreach($admin as $a){ ?>
                                        <h5 class="card-title"></h5>
                                        <div align="center" class="mb-5" style="margin-top:1%">
                                            <font size= "5" style="font-family: Bahnschrift Condensed; font-weight: bold; color: #b30000; text-decoration: underline;">Edit Data <?php echo $a->nama ?></font>
                                        </div>
                                        <hr/>
                                        <form action="<?php echo base_url().'page/update'; ?>" method="post">
                                            <div class="form-group row">
                                                <div class="offset-2 col-8" align="center">
                                                    <input id="username" name="username" placeholder="NIP/NIDN" type="text" required value="<?php echo $a->username ?>" class="form-control here">

                                                    <input id="id_user" name="id_user" type="hidden" required value="<?php echo $a->id_user ?>" class="form-control here">
                                                </div>
                                                <div class="offset-2 col-8">
                                                    <font style="color:#F00; font-size:13px">*<b>NIP/NIDN</b> akan digunakan sebagai <b>Username</b> untuk Login</font>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-2 col-8" align="center">
                                                    <input id="nama" name="nama" placeholder="NAMA LENGKAP" type="text" value="<?php echo $a->nama ?>" required class="form-control here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-2 col-8" align="center">
                                                    <input id="hp" name="hp" placeholder="NO HANDPHONE" type="text" value="<?php echo $a->hp ?>" required class="form-control here">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-2 col-8" align="center">
                                                    <select class="custom-select browser-default" id="level" name="level" required>
                                                        <option value="<?php echo $a->level ?>"><?php 
                                                        if(($a->level) == 1){
                                                            echo "Super Admin";
                                                        }else{
                                                            echo "Dosen IT";
                                                        } ?></option>
                                                        <option value="1">Administrator</option>
                                                        <option value="2">Dosen IT</option>
                                                    </select>
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
                                    <?php } ?>
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
