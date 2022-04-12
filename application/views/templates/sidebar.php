<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu-->
    <div class="sidebar-heading">
        Home
    </div>
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <?php $admin = base_url('admin');
        if ($this->session->userdata('role_id') == 1) { ?>

            <?= "<a class='nav-link pb-0' href=$admin><i class='fa-solid fa-book'></i><span> Dashboard</span></a>" ?>
        <?php } ?>
        <?php $user = base_url('user');
        if ($this->session->userdata('role_id') == 2) { ?>

            <?= "<a class='nav-link pb-0' href=$user><i class='fa-solid fa-book'></i><span> Dashboard</span></a>" ?>
        <?php } ?>
    </li>
    </li>

    <hr class="sidebar-divider mt-3">
    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('Home'); ?>">
            <i class="fa-solid fa-people-group"></i>
            <span>Home Page</span></a>
    </li>
    <li class="nav-item">
        <?php $katbuk = base_url('Buku/kategori');
        if ($this->session->userdata('role_id') == 1) { ?>

            <?= "<a class='nav-link pb-0' href=$katbuk><i class='fa-solid fa-book'></i><span> Kategori Buku</span></a></a>" ?>
        <?php } ?>
    </li>
    </li>
    <li class="nav-item">
        <?php $datbuk = base_url('Buku');
        if ($this->session->userdata('role_id') == 1) { ?>

            <?= "<a class='nav-link pb-0' href=$datbuk><i class='fa-solid fa-book'></i><span> Data Buku</span></a></a>" ?>
        <?php } ?>
    </li>
    <li class="nav-item">
        <?php $datang = base_url('User/anggota');
        if ($this->session->userdata('role_id') == 1) { ?>

            <?= "<a class='nav-link pb-0' href=$datang><i class='fa-solid fa-people-group'></i><span> Kategori Anggota</span></a></a>" ?>
        <?php } ?>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -- >