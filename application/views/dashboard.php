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

                <div class="row" align="center">
                    <div class="col-md-12" style="margin-top: 1%">
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

                        <div class="card" style="border-color: #2f5780; border-style: double; background-color: #2f5780;">
                            <div class="card-header" align="center" style="background-color: #ffffff;">
                                <font style="font-family: Bahnschrift Condensed; font-size: 23px;">BESTARI Archives</font>
                            </div>
                            <div class="card-text" align="center" style="background-color: #2f5780; margin-right: 5%; margin-left: 5%">
                                <br/>
                                <div align="center">
                                    <?php $attributes = array('class' => 'row'); ?>
                                    <?php echo form_open('page/search_front',$attributes);?>
                                    <input type="text" name="keyword" placeholder="SEARCH" class="offset-3 form-control col-md-5"><input type="submit" value="Cari" class="btn btn-success">
                                    <?php echo form_close();?>
                                    <br />
                                </div>

                                <table class="table table-dark table-hover" style="border-style: double;">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Edisi</th>
                                            <th>Tema</th>
                                            <th>File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($artikel as $artikel): ?>
                                            <tr>
                                                <td width="23%">
                                                    <?php echo $artikel->judul ?>
                                                </td>
                                                <td width="23%">
                                                    <?php echo $artikel->penulis ?>
                                                </td>
                                                <td width="11%">
                                                    <?php echo $artikel->edisi ?>
                                                </td>
                                                <td width="23%">
                                                    <?php echo $artikel->tema ?>
                                                </td>
                                                <td>
                                                    <b><a href="<?php echo site_url('file/'.$artikel->id_artikel.'.docx') ?>" target='_blank' ><?php echo $artikel->judul ?></a></b>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2" style="margin-top:2%">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-12" style="margin-top:2%; background-color:#ffffff;">
        <hr />
        <font style="color: #2f5780; font-size: 13px; font-weight: bold"><center>©Copyright 2019 by Muhammad Hasan Al-Banna
            <br />All Right Reserved</center></font>
    </div>        
</div>
</div>
<!-- /container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php $this->load->view('load_js');?>
</body>
</html>
