<!-- Navigation -->
<ul class="nav flex-column">
    <!-- Admin -->
    <?php if($this->session->userdata('akses')=='admin'):?>
    <li class="active nav-item"><a href="<?php echo base_url().'index.php/page'?>" class="nav-link">Dashboard</a></li>
    <li class="nav-item"><a href="" class="nav-link">Surat Masuk</a></li>
    <li class="nav-item"><a href="" class="nav-link">Surat Keluar</a></li>
    <li class="nav-item"><a href="" class="nav-link">Disposisi</a></li>
    <li class="nav-item"><a href="" class="nav-link">Arsip</a></li>
    <li class="nav-item"><a href="<?php echo base_url().'index.php/page/manajemen_user'?>" class="nav-link">Manajemen User</a></li>
    <!-- Kabag -->
    <?php elseif($this->session->userdata('akses')=='kabag'):?>
    <li class="active nav-item"><a href="<?php echo base_url().'index.php/page'?>" class="nav-link">Dashboard</a></li>
    <li class="nav-item"><a href="" class="nav-link">Surat Masuk</a></li>
    <li class="nav-item"><a href="" class="nav-link">Surat Keluar</a></li>
    <!-- Kadin -->
    <?php elseif($this->session->userdata('akses')=='kadin'):?>
    <li class="active"><a href="<?php echo base_url().'index.php/page'?>" class="nav-link">Dashboard</a></li>
    <li class="nav-item"><a href="" class="nav-link">Surat Masuk</a></li>
    <li class="nav-item"><a href="" class="nav-link">Surat Keluar</a></li>
    <li class="nav-item"><a href="" class="nav-link">Disposisi</a></li>
    <!-- Staff -->
    <?php elseif($this->session->userdata('akses')=='staff'):?>
    <li class="active nav-item"><a href="<?php echo base_url().'index.php/page'?>" class="nav-link">Dashboard</a></li>
    <li class="nav-item"><a href="" class="nav-link">Surat Masuk</a></li>
    <?php endif;?>
</ul>
<!-- Navigation -->