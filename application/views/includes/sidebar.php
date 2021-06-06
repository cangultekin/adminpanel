<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="<?php echo base_url(); ?>">Tepe Güvenlik</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
        </div>
    </form>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>login">Çıkış Yap</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">MENU</div>
                    <a class="nav-link <?php if ($selected == "students") {
                                            echo "active";
                                        } ?>" href="<?php echo base_url(); ?>dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-graduate" style="color: white;"></i>
                            Öğrenciler
                        </div>
                    </a>
                    <a class="nav-link <?php if ($selected == "lessons") {
                                            echo "active";
                                        } ?>" href="<?php echo base_url(); ?>lessons">
                        <div class="sb-nav-link-icon"><i class="fa fa-book" style="color: white;"></i>
                            Dersler
                        </div>
                    </a>
                    <a class="nav-link <?php if ($selected == "users") {
                                            echo "active";
                                        } ?>" href="<?php echo base_url(); ?>users">
                        <div class="sb-nav-link-icon"><i class="fa fa-user" style="color: white;"></i>
                            Kullanıcılar
                        </div>
                    </a>
                </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">
        <?php echo $content; ?>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">&copy; 2018 Tepe Güvenlik. Her Hakkı Saklıdır.</div>
                        <div>
                            Tepe Güvenlik A.Ş bir <a href="www.bilkentholding.com.tr">Bilkent Holding A.Ş</a>
                            kuruluşudur.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>