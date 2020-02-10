<a href="<?php echo base_url().'ops'; ?>"><button type="button" class="btn btn-danger"><font color="#FFFFFF"><b>Beranda</b></font></button></a>
<!--Akses Menu Untuk Admin-->
<?php if($this->session->userdata('akses')=='1'){?>
    <a href="<?php echo base_url().'page/mahasiswa'; ?>"><button type="button" class="btn btn-danger"><font color="#FFFFFF"><b>Data Mahasiswa</b></font></button></a>
    <a href="<?php echo base_url().'page/admin'; ?>"><button type="button" class="btn btn-danger"><font color="#FFFFFF"><b>Data Dosen</b></font></button></a>
<?php }elseif($this->session->userdata('akses')=='2'){?>
    <a href="<?php echo base_url().'page/info_kt'; ?>"><button type="button" class="btn btn-danger"><font color="#FFFFFF"><b>Data Kuliah Tamu</b></font></button></a>
    <a href="<?php echo base_url().'page/absen'; ?>"><button type="button" class="btn btn-danger"><font color="#FFFFFF"><b>Absen</b></font></button></a>
<?php }