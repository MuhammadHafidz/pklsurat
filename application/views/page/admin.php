<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home - Agenda Surat Masuk</title>
        <meta name="description" content="PKL Surat Menyurat">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Import File -->
        <link rel="stylesheet" href="<?php echo base_url();?>dist/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>dist/css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php if($header) { echo $header; }?>
        <!-- menu -->
            <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-md-3">
                        <?php if($sidebar) { 
                            echo $sidebar;
                        }?>                   
                    </div>
                    
                    <div class="col-md-9">
                        <!-- <div class="pb-3" style="margin-top: -25px;">
                            <button class="btn btn-primary">Refresh</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#hapus">Hapus</button>
                        </div> -->

                        <div class="mr-5">
                        <table class="table table-borderless table-responsive-md table-hover">
                            <thead>
                                <tr class="" style="background: #666 !important; color: #fff;">
                                    <th>NIP</th>
                                    <th >Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                
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
                                        <label for="new_name" class="col-sm-3 control-label">No. Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="new_name" placeholder="Nomor Surat">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_subname" class="col-sm-3 control-label">Jenis Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="new_subname" placeholder="Jenis Surat">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_name" class="col-sm-3 control-label">Tanggal Surat</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="tanggal" placeholder="Tanggal Surat">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_subname" class="col-sm-3 control-label">Sifat Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sifat" placeholder="Sifat Surat">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_name" class="col-sm-3 control-label">Dari</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="dari" placeholder="Dari">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_subname" class="col-sm-3 control-label">Prioritas Surat</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="prioritas" placeholder="Prioritas Surat">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_name" class="col-sm-3 control-label">Kepada</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="kepada" placeholder="Kepada">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_subname" class="col-sm-3 control-label">Lokasi Arsip</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="arsip" placeholder="Lokasi Arsip">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_name" class="col-sm-3 control-label">Lampiran</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="lampiran1" placeholder="Lampiran">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_subname" class="col-sm-3 control-label">Lampiran</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lampiran2" placeholder="Lampiran">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="col-sm-6 form-group d-flex">
                                        <label for="new_name" class="col-sm-3 control-label">Perihal</label>
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

                        <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" id="simpan">Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div><!-- End Modal Footer -->
  
                        </form>
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