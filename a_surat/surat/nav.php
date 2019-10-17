<?php
    $root = "../../../";
?>
<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element" align="center">
                            <span>
                                <img alt="image" class="img-circle" src="<?=$root;?>img/user.jpg" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold"><?php echo $_SESSION['nama']; ?></strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">
                            IN
                        </div>
                    </li>
                    <li>
                        <a href="<?=$root;?>index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Beranda</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-user"></i> <span class="nav-label">Data Desa</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?=$root;?>a_profil/index.php">Profil Desa</a></li>
                            <li><a href="<?=$root;?>a_dusun/index.php">Dusun</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=$root;?>a_datapenduduk/index.php"><i class="fa fa-book"></i> <span class="nav-label">Data Penduduk</span></a>
                    </li>
                    <li>
                        <a href="<?=$root;?>a_surat/index.php"><i class="fa fa-envelope"></i> <span class="nav-label">Buat Surat</span></a>
                    </li>
                </ul>
            </div>
        </nav>