<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>SIAB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="By analysis.alienasi.com" />
    <meta name="author" content="M Rahmat Hidayatulloh" />
    <!--Include Bootstrap-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
    <?php $this->load->view('load_css');?>
</head>
<body>
    <?php $this->load->view('menu');?>
    <!--Include menu-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="row" align="center" style="margin-top: 3%">
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

                        <div class="card" style="border-color: #2f5780; border-style: double; margin-top: 2%">
                            <div class="card-text" align="right" style="margin-right: 1%">
                                <div style="text-align: center; margin-bottom: 7%; margin-top: 7%">

                                    <center><h1>Membuat Upload File Dengan CodeIgniter | MalasNgoding.com</h1></center>
                                    <?php echo $error;?>

                                    <?php echo form_open_multipart('page/aksi_upload');?>

                                    <input type="file" name="berkas" />

                                    <br /><br />

                                    <input type="submit" value="upload" />

                                </form>


                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-2" style="margin-top:2%">
                </div>
            </div>

            <div class="row" style="margin-top:10%; background-color:#333333">
                <br />
            </div>
        </div>            
    </div>
</div>
<!-- /container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php $this->load->view('load_js');?>
</body>
</html>
