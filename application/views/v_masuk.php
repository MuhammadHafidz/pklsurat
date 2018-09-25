<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Surat Masuk</title>

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
                        <small>Surat Masuk</small>
                        <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Surat</a></div>
                    </h1>
                </div>

                <div class="row">
                    <div id="reload">
                    <table class="table table-striped table-hover table-responsive" id="mydata">
                        <thead>
                            <tr>
                                <th scope="col">No. Registrasi</th>
                                <th scope="col">Kode Arsip</th>
                                <th scope="col">No. Surat</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Lampiran</th>
                                <th scope="col">Perihal</th>
                                <th scope="col">Sifat</th>
                                <th scope="col">Status</th>
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
        
        
        <!-- Import File -->
        <script type="text/javascript" src="<?php echo base_url().'dist/js/jquery.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'dist/js/bootstrap.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'dist/js/jquery.dataTables.js'?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                tampil_data_user();	//pemanggilan fungsi tampil barang.
                
                $('#mydata').dataTable();
                
                //fungsi tampil barang
                function tampil_data_user(){
                    $.ajax({
                        type  : 'ajax',
                        url   : '<?php echo base_url().'index.php/masuk/data_masuk'?>',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                html += '<tr scope="row">'+
                                        '<td>'+data[i].no_registrasi_masuk+'</td>'+
                                        '<td>'+data[i].kode_arsip+'</td>'+
                                        '<td>'+data[i].no_surat_masuk+'</td>'+
                                        '<td>'+data[i].tanggal_masuk+'</td>'+
                                        '<td>'+data[i].lampiran_masuk+'</td>'+
                                        '<td>'+data[i].perihal_masuk+'</td>'+
                                        '<td>'+data[i].sifat_masuk+'</td>'+
                                        '<td>'+data[i].status_masuk+'</td>'+
                                        '<td style="text-align:right;">'+
                                        '<a href="#" class="btn btn-sm btn-info item_edit" data-toggle="modal" data-target="#ModalaEdit" data="'+data[i].nip+'"><span class="fa fa-edit"></span> Edit</a>'+' '+' '+
                                        '<a href="#" class="btn btn-sm btn-danger item_hapus" data-toggle="modal" data-target="#ModalaHapus" data="'+data[i].nip+'"><span class="fa fa-delete"></span> Hapus</a>'+
                                        '</td>'+
                                        '</tr>';
                            }
                            $('#show_data').html(html);
                        }

                    });
                }

                //GET UPDATE
                $('#show_data').on('click','.item_edit',function(){
                    var nip=$(this).attr('data');
                    $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url().'index.php/user/get_user'?>",
                        dataType : "JSON",
                        data : {nip:nip},
                        success: function(data){
                            $.each(data,function(nip, nama, pass, level){
                                $('#ModalaEdit').modal('show');
                                $('[name="nip"]').val(data.nip);
                                $('[name="nama"]').val(data.nama);
                                $('[name="pass"]').val(data.pass);
                                $('[name="level"]').val(data.level);
                            });
                        }
                    });
                    return false;
                });


                //GET HAPUS
                $('#show_data').on('click','.item_hapus',function(){
                    var nip=$(this).attr('data');
                    $('#ModalHapus').modal('show');
                    $('[name="nip"]').val(nip);
                });

                //Simpan User
                $('#btn_simpan').on('click',function(){
                    var nip=$('#nip').val();
                    var nama=$('#nama').val();
                    var pass=$('#pass').val();
                    var level=$('#level').val();
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url().'index.php/user/simpan_user'?>",
                        dataType : "JSON",
                        data : {nip:nip , nama:nama, pass:pass, level:level},
                        success: function(data){
                            $('[name="nip"]').val("");
                            $('[name="nama"]').val("");
                            $('[name="pass"]').val("");
                            $('[name="level"]').val("");
                            $('#ModalaAdd').modal('hide');
                            tampil_data_user();
                        }
                    });
                    return false;
                });

                //Update Barang
                $('#btn_update').on('click',function(){
                    var nip=$('#nip2').val();
                    var nama=$('#nama2').val();
                    var pass=$('#pass2').val();
                    var level=$('#level2').val();
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url().'index.php/user/update_user'?>",
                        dataType : "JSON",
                        data : {nip:nip , nama:nama, pass:pass, level:level},
                        success: function(data){
                            $('[name="nip"]').val("");
                            $('[name="nama"]').val("");
                            $('[name="pass"]').val("");
                            $('[name="level"]').val("");
                            $('#ModalaEdit').modal('hide');
                            tampil_data_user();
                        }
                    });
                    return false;
                });

                //Hapus Barang
                $('#btn_hapus').on('click',function(){
                    var nip=$('#textkode').val();
                    $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url().'index.php/user/del_user'?>",
                    dataType : "JSON",
                            data : {nip: nip},
                            success: function(data){
                                    $('#ModalHapus').modal('hide');
                                    tampil_data_user();
                            }
                        });
                    return false;
                });

            });

        </script>
    </body>
</html>