<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="PKL Surat Menyurat">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Import File -->
        <link rel="stylesheet" href="<?php echo base_url().'dist/css/bootstrap.css'?>">
        <link rel="stylesheet" href="<?php echo base_url().'dist/css/main.css'?>">
        <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
                <h2 class="text-secondary">Welcome <?php echo $this->session->userdata('ses_nama');?></h2>
            </div>
        </div>
        <!-- Content -->
                
         
        <!-- Import File -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="<?php echo base_url();?>dist/js/bootstrap.min.js"></script>
        
    </body>
</html>