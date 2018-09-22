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


        <!-- menu -->
            <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-md-3">
                       <!-- Sidebar -->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav flex-column ml-5 text-secondary">
                                    <li class="nav-item p-2"><a href="<?php echo base_url();?>index.php/home" class="nav-link disabled">Agenda Surat Masuk</a> </li>
                                    <li class="nav-item p-2"><a href="<?php echo base_url();?>index.php/home/agenda_surat_keluar" class="nav-link text-secondary">Agenda Surat Keluar</a></li>
                                    <li class="nav-item p-2"><a href="#!" class="nav-link text-secondary">Arsip surat</a></li>
                                    <li class="nav-item p-2"><a href="#!" class="nav-link text-secondary">Disposisi Surat</a></li>
                                    <li class="nav-item p-2"><a href="<?php echo base_url();?>index.php/home/manajemen" class="nav-link text-secondary">Manajemen User</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar -->                
                    </div>
                    
                    
                    <div class="col-md-9">
                        <!-- <div class="pb-3" style="margin-top: -25px;">
                            <button class="btn btn-primary">Refresh</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#hapus">Hapus</button>
                        </div> -->
                        <!-- Manajemen User -->
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