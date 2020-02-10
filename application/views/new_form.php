<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>SIAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="By analysis.alienasi.com" />
    <meta name="author" content="M Rahmat Hidayatulloh" />
    <!--Include Bootstrap-->
    
    <?php $this->load->view('load_css');?>
</head>
<body>
    <?php $this->load->view('menu');?>
    <!--Include menu-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="row" align="center" style="margin-top: 1%">
                    <div class="col-md-12">
                        <font style="font-size: 24px; font-weight: bold; color: #2f5780">
                            Sistem Informasi Arsip
                        </font>
                        <br />
                        <a href="<?php echo base_url()?>"><img src="<?php echo base_url().'assets/img/logo.PNG'?>" width="20%"></a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8" style="margin-top:2%">

                        <div class="card" style="border-color: #2f5780; border-style: double;">

                            <div class="card-text" style="background-color: #cfcfcf">
                                <div style="text-align: center; margin-bottom: 3%; margin-top: 3%">
                                    <font style="color: #2f5780; font-weight: bold; font-size: 20px">
                                        Upload Artikel Baru
                                    </font>
                                    <hr />
                                    <br />
                                    <form action="<?php base_url('page/add') ?>" method="post" enctype="multipart/form-data" >
                                        <div class="form-group row">
                                            <div class="offset-2 col-8" align="center">
                                                <input id="judul" name="judul" placeholder="JUDUL ARTIKEL" type="text" required class="form-control here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-2 col-8" align="center">
                                                <input id="penulis" name="penulis" placeholder="NAMA PENULIS" type="text" required class="form-control here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-2 col-8" align="center">
                                                <input id="edisi" name="edisi" placeholder="EDISI" type="text" required class="form-control here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-2 col-8" align="center">
                                                <input id="tema" name="tema" placeholder="TEMA" type="text" required class="form-control here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-2 col-8" align="center">
                                                <input class="form-control-file <?php echo form_error('penulis') ? 'is-invalid':'' ?>"
                                                type="file" name="filedoc" />
                                                <div align="left">
                                                    <font style="color: #B30000;">Format file <b>"docx"</b></font>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                                    </form>


                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-2" style="margin-top:2%">
                    </div>
                </div>
            </div>    
            <div class="col-md-12" style="margin-top:1%; background-color:#ffffff;">
                <hr />
                <font style="color: #2f5780; font-size: 13px; font-weight: bold"><center>©Copyright 2019 by Muhammad Hasan Al-Banna
                    <br />All Right Reserved</center>
                </font>
            </div>         
        </div>
    </div>
    <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php $this->load->view('load_js');?>
</body>
</html>
