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
<div >

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
                        <small>user</small>
                        <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah User</a></div>
                    </h1>
                </div>

                <div class="row" >
                    <div id="reload">
                    <table class="table table-borderless table-responsive-md table-hover" id="mydata" >
                        <thead>
                            <tr>
                                <th scope="col">NIP User</th>
                                <th scope="col">Nama User</th>
                                <th scope="col">Level User</th>
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
                    <h3 class="modal-title" id="myModalLabel">Tambah User</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                    <form class="form-horizontal">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3" >NIP User</label>
                                <div class="col-xs-9">
                                    <input name="nip" id="nip" class="form-control" type="number" placeholder="NIP User" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3" >Nama User</label>
                                <div class="col-xs-9">
                                    <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama User" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Password User</label>
                                <div class="col-xs-9">
                                    <input name="pass" id="pass" class="form-control" type="password" placeholder="********" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3" >Level</label>
                                <div class="col-xs-9">
                                    <select name="level" id="level">
                                        <option value="admin">Admin</option>
                                        <option value="kabag">Kabag</option>
                                        <option value="kadin">Kadin</option>
                                        <option value="staff">Staff</option>
                                    </select>
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
                    <h3 class="modal-title" id="myModalLabel">Edit User</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                    <form class="form-horizontal">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3" >NIP User</label>
                                <div class="col-xs-9">
                                    <input name="edit_nip" id="nip2" class="form-control" type="number" placeholder="NIP User" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3" >Nama User</label>
                                <div class="col-xs-9">
                                    <input name="edit_nama" id="nama2" class="form-control" type="text" placeholder="Nama User" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3" >Password User</label>
                                <div class="col-xs-9">
                                    <input name="edit_pass" id="pass2" class="form-control" type="password" placeholder="********" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3" >Level User</label>
                                <div class="col-xs-9">
                                    <select name="edit_level" id="level2">
                                        <option value="admin">Admin</option>
                                        <option value="kabag">Kabag</option>
                                        <option value="kadin">Kadin</option>
                                        <option value="staff">Staff</option>
                                    </select>
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
                        <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                    </div>
                    <form class="form-horizontal">
                        <div class="modal-body">
                                            
                                <input type="hidden" name="nip_hapus" id="textkode" value="">
                                <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>
                                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button class="btn_hapus btn btn-danger" id="btn_delete">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
</div>
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
		        url   : '<?php echo base_url().'index.php/user/data_user'?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr scope="row">'+
		                  		'<td>'+data[i].nip+'</td>'+
		                        '<td>'+data[i].nama+'</td>'+
		                        '<td>'+data[i].level+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-sm btn-info item_edit"  data="'+data[i].nip+' "><span class="fa fa-edit"></span> Edit</a>'+' '+' '+
                                    '<a href="javascript:;" class="btn btn-sm btn-danger item_hapus"  data="'+data[i].nip+'"><span class="fa fa-delete"></span> Hapus</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }
		    });
		}
		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url().'index.php/user/get_user'?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                	$.each(data,function(nip, nama, pass, level){
                    	$('#ModalaEdit').modal('show');
            			$('[name="edit_nip"]').val(data.nip);
            			$('[name="edit_nama"]').val(data.nama);
            			$('[name="edit_pass"]').val(data.pass);
            			$('[name="edit_level"]').val(data.level);
            		});
                }
            });
            return false;
        });
		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalaHapus').modal('show');
            $('[name="nip_hapus"]').val(id);
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
        //Update USer
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
                    $('[name="edit_nip"]').val("");
                    $('[name="edit_nama"]').val("");
                    $('[name="edit_pass"]').val("");
                    $('[name="edit_level"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_user();
                }
            });
            return false;
        });
        //Hapus Barang
        $('#btn_delete').on('click',function(){
            var nip=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url().'index.php/user/del_user'?>",
            dataType : "JSON",
            data : {nip: nip},
            success: function(data){
                    $('#ModalaHapus').modal('hide');
                    tampil_data_user();
                    }
                });
            return false;
        });
	});
</script>
</body>
</html> 