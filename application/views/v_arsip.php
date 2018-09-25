<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>User</title>
        <meta name="description" content="PKL Surat Menyurat">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Import File -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'dist/css/bootstrap.css'?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'dist/css/jquery.dataTables.css'?>">
    </head>
    <body>
        <!-- Header -->
        <?php $this->load->view('v_header');?>
        <!-- Header -->

        <!-- Content -->
        <div class="row">
                <div class="col-md-3">
                <!-- Navigation -->
                <?php $this->load->view('v_menu');?>
                <!-- Navigation -->
                </div>
                <div class="col-md-9">
                    <!-- Tabel -->
                    <div class="row">
                        <h1 class="page-header">Data
                            <small>Arsip</small>
                            <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Arsip</a></div>
                        </h1>
                    </div>

                    <div class="row">
                        <div id="reload">
                        <table class="table table-striped table-hover table-responsive" id="mydata">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Arsip</th>
                                    <th scope="col">Tempat Arsip</th>
                                    <th scope="col">Keterangan Arsip</th>
                                    <th style="text-align: right;" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- Tabel -->
                </div>
            </div>
            <!-- Content -->
        
            <!-- MODAL ADD -->
            <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Tambah Arsip</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                        <form class="form-horizontal">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Kode Arsip</label>
                                    <div class="col-xs-9">
                                        <input name="kode" id="kode" class="form-control" type="number" placeholder="Kode Arsip" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Tempat Arsip</label>
                                    <div class="col-xs-9">
                                        <input name="tempat" id="tempat" class="form-control" type="text" placeholder="Tempat Arsip" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Keterangan Arsip</label>
                                    <div class="col-xs-9">
                                        <input name="keterangan" id="keterangan" class="form-control" type="text" placeholder="Keterangan Arsip" required>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button class="btn btn-info" id="btn_simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--END MODAL ADD-->

            <!-- MODAL EDIT -->
            <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Arsip</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                        <form class="form-horizontal">
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Kode Arsip</label>
                                    <div class="col-xs-9">
                                        <input name="kode2" id="kode2" class="form-control" type="number" placeholder="Kode Arsip" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Tempat Arsip</label>
                                    <div class="col-xs-9">
                                        <input name="tempat2" id="tempat2" class="form-control" type="text" placeholder="Tempat Arsip" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-3" >Keterangan Arsip</label>
                                    <div class="col-xs-9">
                                        <input name="keterangan2" id="keterangan2" class="form-control" type="text" placeholder="Keterangan Arsip" required>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                <button class="btn btn-info" id="btn_update">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--END MODAL EDIT-->

            <!--MODAL HAPUS-->
            <div class="modal fade" id="ModalaHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Hapus Arsip</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        </div>
                        <form class="form-horizontal">
                            <div class="modal-body">
                                                
                                    <input type="hidden" name="nip" id="textkode" value="">
                                    <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>
                                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--END MODAL HAPUS-->
        
        <!-- Import File -->
        <script type="text/javascript" src="<?php echo base_url().'dist/js/jquery.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'dist/js/bootstrap.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'dist/js/jquery.dataTables.js'?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                tampil_data_arsip();	//pemanggilan fungsi tampil barang.
                
                $('#mydata').dataTable();
                
                //fungsi tampil barang
                function tampil_data_arsip(){
                    $.ajax({
                        type  : 'ajax',
                        url   : '<?php echo base_url().'index.php/arsip/data_arsip'?>',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                html += '<tr scope="row">'+
                                        '<td>'+data[i].kode_arsip+'</td>'+
                                        '<td>'+data[i].tempat_arsip+'</td>'+
                                        '<td>'+data[i].keterangan_arsip+'</td>'+
                                        '<td style="text-align:right;">'+
                                        '<a href="#" class="btn btn-sm btn-info item_edit" data-toggle="modal" data-target="#ModalaEdit" data="'+data[i].kode+'"><span class="fa fa-edit"></span> Edit</a>'+' '+
                                        '<a href="#" class="btn btn-sm btn-danger item_hapus" data-toggle="modal" data-target="#ModalaHapus" data="'+data[i].kode+'"><span class="fa fa-delete"></span> Hapus</a>'+
                                        '</td>'+
                                        '</tr>';
                            }
                            $('#show_data').html(html);
                        }

                    });
                }

                //GET UPDATE
                $('#show_data').on('click','.item_edit',function(){
                    var kode=$(this).attr('data');
                    $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url().'index.php/arsip/get_arsip'?>",
                        dataType : "JSON",
                        data : {kode:kode},
                        success: function(data){
                            $.each(data,function(kode, tempat, keterangan){
                                $('#ModalaEdit').modal('show');
                                $('[name="kode"]').val(data.kode_arsip);
                                $('[name="tempat"]').val(data.tempat_arsip);
                                $('[name="keterangan"]').val(data.keterangan_arsip);
                            });
                        }
                    });
                    return false;
                });


                //GET HAPUS
                $('#show_data').on('click','.item_hapus',function(){
                    var kode=$(this).attr('data');
                    $('#ModalaHapus').modal('show');
                    $('[name="kode"]').val(kode);
                });

                //Simpan User
                $('#btn_simpan').on('click',function(){
                    var kode=$('#kode').val();
                    var tempat=$('#tempat').val();
                    var keterangan=$('#keterangan').val();
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url().'index.php/arsip/simpan_arsip'?>",
                        dataType : "JSON",
                        data : {kode:kode , tempat:tempat, keterangan:keterangan},
                        success: function(data){
                            $('[name="kode"]').val("");
                            $('[name="tempat"]').val("");
                            $('[name="keterangan"]').val("");
                            $('#ModalaAdd').modal('hide');
                            tampil_data_arsip();
                        }
                    });
                    return false;
                });

                //Update Barang
                $('#btn_update').on('click',function(){
                    var kode=$('#kode2').val();
                    var tempat=$('#tempat2').val();
                    var keterangan=$('#keterangan2').val();
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url().'index.php/arsip/update_arsip'?>",
                        dataType : "JSON",
                        data : {kode:kode , tempat:tempat, keterangan:keterngan},
                        success: function(data){
                            $('[name="kode"]').val("");
                            $('[name="tempat"]').val("");
                            $('[name="keterangan"]').val("");
                            $('#ModalaEdit').modal('hide');
                            tampil_data_arsip();
                        }
                    });
                    return false;
                });

                //Hapus Barang
                $('#btn_hapus').on('click',function(){
                    var kode=$('#textkode').val();
                    $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url().'index.php/arsip/del_arsip'?>",
                    dataType : "JSON",
                            data : {kode: kode},
                            success: function(data){
                                    $('#ModalaHapus').modal('hide');
                                    tampil_data_arsip();
                            }
                        });
                    return false;
                });

            });

        </script>
    </body>
</html>