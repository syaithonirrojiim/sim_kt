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
                    <a class="nav-link" href="<?php echo base_url().'login/'; ?>"><img src="<?php echo base_url().'assets/images/login.png'?>" width="3%" title="Login"/></a>
                    
                </div>

                <div class="row" align="center">
                    <div class="col-md-12" style="margin-top: 1%">
                        <br />
                        <a href="<?php echo base_url()?>"><img src="<?php echo base_url().'assets/images/umm.png'?>" width="20%"></a>
                        <br />
                        <font style="font-weight: bold; font-family: Arial; color: #b30000; font-size: 25px;">Sistem Informasi Manajemen Kuliah Tamu<br/>Program Studi Informatika</font>
                        <br /><br />
                        <div class="col-md-2"></div>
                        <div class="col-md-8" align="center">
                            <?php $this->load->view('nav');
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
                        <div class="card" style="border-style: none; margin-top: 3%">
                            <div class="card-text" align="center" style="margin-right: 2%; margin-left: 2%">

                                <form action="<?php echo base_url().'page/daftar_xecute'; ?>" method="post">
                                    <div class="form-group row">
                                        <div class="offset-2 col-8" align="center">
                                            <input id="nim" name="nim" placeholder="NIM" type="text" required class="form-control here">
                                        </div>
                                        <div class="offset-2 col-8" align="left">
                                            <font style="color:#F00; font-size:13px">*Tuliskan <b>NIM</b> anda dengan benar</font>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-2 col-8" align="center">
                                            <select class="form-control" name="id_kt">
                                                <option  value="">Tema Kuliah Tamu</option>                    
                                                <?php foreach($info_kt as $row) { ?>
                                                    <option value="<?php echo $row->id_info_kt;?>"><?php echo $row->kuliah;?></option>
                                                <?php } ?>
                                            </select> 
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
