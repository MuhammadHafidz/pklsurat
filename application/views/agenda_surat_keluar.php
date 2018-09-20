<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home - Agenda Surat Keluar</title>
        <meta name="description" content="PKL Surat Menyurat">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Import File -->
        <link rel="stylesheet" href="<?php echo base_url();?>dist/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>dist/css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

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
                        <h5 class="dropdown-item" href="#">Username</h5>

                        <a class="dropdown-item float-right" href="#">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <!-- Header -->

        <!-- menu -->
            <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav flex-column ml-5 text-secondary">
                            <li class="nav-item p-2"><a href="<?php echo base_url();?>index.php/home" class="nav-link disabled">Agenda Surat Masuk</a> </li>
                            <li class="nav-item p-2"><a href="<?php echo base_url();?>index.php/home/agenda_surat_keluar" class="nav-link text-secondary">Agenda Surat Keluar</a></li>
                            <li class="nav-item p-2"><a href="#!" class="nav-link text-muted">Bank surat</a></li>
                            <li class="nav-item p-2"><a href="#!" class="nav-link text-secondary">Surat Masuk</a></li>
                            <li class="nav-item p-2"><a href="#!" class="nav-link text-secondary">Disposisi Surat</a></li>
                        </ul>
                    </div>

                    <div class="col-md-9">
                        <div class="pb-3" style="margin-top: -25px;">
                            <button class="btn btn-primary">Refresh</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#hapus">Hapus</button>
                        </div>

                        <div class="mr-5">
                        <table class="table table-borderless table-responsive-md table-hover">
                            <thead>
                                <tr class="" style="background: #666 !important; color: #fff;">
                                    <th>Tanggal Pembuatan</th>
                                    <th >Status</th>
                                    <th >No. Registrasi</th>
                                    <th >No. Surat</th>
                                    <th >Kepada</th>
                                    <th >Perihal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td >2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@fat</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td >3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>the Bird</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        <!-- menu -->

        <!-- Modal -->
        <div class="modal fade" id="tambah" tabindex="1" role="dialog" aria-labelledby="tambahlLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-80">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">

                        <form class="form-horizontal">
                            <h1 class="text-secondary">No. Registrasi</h1>
                            <div class="d-flex">
                                <div class="col-sm-6">
                                    <h4>Identitas Surat</h4>
                                </div>
                                <div class="col-sm-6">
                                    <h4>Atribut Surat</h4>
                                </div>
                            </div>
                            
                            <div class="form-group form-group-sm">
                                
                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="no_surat" class="col-sm-3 control-label">No. Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="no_surat" placeholder="Nomor Surat">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="jenis" class="col-sm-3 control-label">Jenis Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="jenis" placeholder="Jenis Surat">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="tanggal" class="col-sm-3 control-label">Tanggal Surat</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="tanggal" placeholder="Tanggal Surat">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="sifat" class="col-sm-3 control-label">Sifat Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sifat" placeholder="Sifat Surat">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="dari" class="col-sm-3 control-label">Dari</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="dari" placeholder="Dari">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="prioritas" class="col-sm-3 control-label">Prioritas Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="prioritas" placeholder="Prioritas Surat">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="kepada" class="col-sm-3 control-label">Kepada</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="kepada" placeholder="Kepada">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="arsip" class="col-sm-3 control-label">Lokasi Arsip</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="arsip" placeholder="Lokasi Arsip">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="lampiran1" class="col-sm-3 control-label">Lampiran</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="lampiran1" placeholder="Lampiran">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="lampiran2" class="col-sm-3 control-label">Lampiran</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lampiran2" placeholder="Lampiran">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="text" class="col-sm-3 control-label">Perihal</label>
                                        <div class="col-sm-9">
                                            <textarea name="text" id="text" class="form-control" placeholder="Perihal"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <div class="col-sm-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <p>Upload hanya untuk file .doc, .docx, .jpg, .jpeg  dan .png</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-6">
                                        <h4>Korespodensi Surat</h4>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="kode_kores" class="col-sm-3 control-label">Kode Korespodensi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="kode_kores" id="kode_kores" placeholder="Kode Korespodensi">                                    
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="no_su" class="col-sm-3 control-label">Nomor Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="no_su" id="no_su" placeholder="Nomor Surat">                                    
                                        </div>
                                    </div>
                                </div>

                        <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="simpan">Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div><!-- End Modal Footer -->
  
                        </form>
                        <?php echo form_close();?>

                    </div> <!-- End modal body div -->
                </div> <!-- End modal content div -->
            </div> <!-- End modal dialog div -->
        </div> <!-- End modal div -->

         <div class="modal fade" id="hapus" tabindex="1" role="dialog" aria-labelledby="hapuslLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="d-flex">
                            <button class="btn-primary">Yes</button>
                            <button class="btn-danger" data-dismiss="modal">No</button>
                            <p>Hello Word</p>
                        </div>
                    </div> <!-- End modal body div -->
                </div> <!-- End modal content div -->
            </div> <!-- End modal dialog div -->
        </div>
         
        <!-- Import File -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="<?php echo base_url();?>dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
        <script>
            $('#tanggal').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script>
        
    </body>
</html>