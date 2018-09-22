<!-- Header -->
<div class="row">
    <div class="col-md-9 col-sm-12">
        <img src="<?php echo base_url();?>dist/img/SIPARS.png" alt="Logo Sipas" class="rounded float-left w-25 mh-75 ml-5">
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="dropdown">
            <img src="<?php echo base_url();?>dist/img/ava.png" alt="Gambar Avatar" class="rounded-circle w-25 h-25 float-right mr-5 mt-3" data-toggle="dropdown" style="width: 50px !important;">
            <div class="dropdown-menu">
                <h5 class="dropdown-header">Profile</h5>
                <p class="dropdown-item"><?php echo $this->session->userdata('ses_nama');?></p>
                <a class="dropdown-item float-right" href="<?php echo base_url().'index.php/control/logout';?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Header -->