<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
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
                    <a class="nav-link" href="<?php echo base_url().'login/logout'; ?>"><img src="<?php echo base_url().'assets/images/logout.png'?>" width="3%" title="logout"/></a>
                    
                </div>

                <div class="row" align="center">
                    <div class="col-md-12" style="margin-top: 1%">
                        <br />
                        <a href="<?php echo base_url()?>"><img src="<?php echo base_url().'assets/images/umm.png'?>" width="20%"></a>
                        <br />
                        <font style="font-weight: bold; font-family: Arial; color: #b30000; font-size: 25px;">Sistem Informasi Manajemen Kuliah Tamu<br/>Program Studi Informatika</font>
                        <br /><br />
                        <div class="col-md-2"></div>
                        <div class="col-md-8" align="right" style="margin-right: 2%">
                            <?php $this->load->view('menu');
                            ?>
                            <!--Include menu-->
                            <a href="<?php echo base_url().'page/export'; ?>"><button type="button" class="btn btn-success"><font color="#FFFFFF"><b>Cetak</b></font></button></a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card" style="border-style: none; margin-top: 1%">
                            <div class="card-text" align="center" style="margin-right: 2%; margin-left: 2%">
                                <table class="table table-dark table-hover" style="border-style: double;">
                                    <thead>
                                        <tr>
                                            <th style="background-color: #b30000"><center>NIM</center></th>
                                            <th style="background-color: #b30000">Nama</th>
                                            <th style="background-color: #b30000">Tema Kuliah Tamu</th>
                                            <th style="background-color: #b30000"><center>Status</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($daftar as $i): ?>
                                            <tr>
                                                <td width="20%">
                                                    <center><?php echo $i->nim ?></center>
                                                </td>
                                                <td width="25%">
                                                    <?php echo $i->nama ?>
                                                </td>
                                                <td width="25%">
                                                    <?php echo $i->kuliah ?>
                                                </td>
                                                <td> <center>
                                                    <?php if(($i->status) == 0){
                                                        echo anchor('page/hadir/'.$i->nim,'<img src="../assets/images/hadir.png">'); }
                                                        if(($i->status) == 1){ echo anchor('page/bolos/'.$i->nim,'<img src="../assets/images/bolos.png">'); }?>

                                                    </center></td>
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
</div>
</div>
<!-- /container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php $this->load->view('load_js');?>
</body>
</html>
