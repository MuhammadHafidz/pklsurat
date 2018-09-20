<!-- Header -->
<!-- <div class="container"> -->
<div class="row">
    <div class="col-md-4 col-sm-12">
        <img src="<?php echo base_url();?>dist/img/SIPARS.png" alt="Logo Sipas" class="rounded float-left w-50 mh-75 ml-5">
    </div>
    <div class="col-md-5 col-sm-12">
        <div class="input-group mt-4">
            <input type="text" class="form-control" id="cari-btn" placeholder="Masukkan nomor surat yang dicari">                       
            <div class="input-group-prepend">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="dropdown">
            <img src="<?php echo base_url();?>dist/img/ava.png" alt="Gambar Avatar" class="rounded-circle w-25 h-25 float-right mr-5 mt-3" data-toggle="dropdown" style="width: 50px !important;">
            <div class="dropdown-menu">
                <h5 class="dropdown-header">Profile</h5>
                <a class="dropdown-item float-right" href="<?php echo base_url().'index.php/pages/logout';?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- Header -->