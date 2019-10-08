<?php include "../koneksi.php" ?>
<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element" align="center">
                            <span>
                                <img alt="image" class="img-circle" src="../img/user.jpg" />
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
                        <a href="../index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Beranda</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-user"></i> <span class="nav-label">Data Desa</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.php">Profil Desa</a></li>
                            <li><a href="../a_dusun/index.php">Dusun</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../a_datapenduduk/index.php"><i class="fa fa-book"></i> <span class="nav-label">Data Penduduk</span></a>
                    </li>
                    <li>
                        <a href="../a_surat/index.php"><i class="fa fa-envelope"></i> <span class="nav-label">Buat Surat</span></a>
                    </li>
                    <!-- <li>
                        <a href=""><i class="fa fa-envelope"></i> <span class="nav-label">Surat</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="../s_bmenikah/index.php">Surat Belum Menikah</a></li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href=""><i class="fa fa-book"></i> <span class="nav-label">Buku Administrasi</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="">Peraturan Desa</a></li>
                            <li><a href="">Keputusan Kades</a></li>
                            <li><a href="">Inventaris & Kekayaan Desa</a></li>
                            <li><a href="">Aparat Pemerintah Desa</a></li>
                            <li><a href="">Tanah Kas Desa</a></li>
                            <li><a href="">Tanah Di Desa</a></li>
                            <li><a href="">Agenda</a></li>
                            <li><a href="">Ekspedisi</a></li>
                            <li><a href="">Berita</a></li>
                            <li><a href="">Induk Penduduk</a></li>
                            <li><a href="">Mutasi Penduduk</a></li>
                            <li><a href="">Jumlah Penduduk</a></li>
                            <li><a href="">Penduduk Sementara</a></li>
                            <li><a href="">KTP & KK</a></li>
                            <li><a href="">APBD</a></li>
                            <li><a href="">RAB</a></li>
                            <li><a href="">Kas Pembantu Kegiatan</a></li>
                            <li><a href="">Kas Umum</a></li>
                            <li><a href="">Kas Pembantu</a></li>
                            <li><a href="">Rencana KP</a></li>
                            <li><a href="">Kegiatan Pembangunan</a></li>
                            <li><a href="">Inventaris Hasil Pembangunan</a></li>
                            <li><a href="">Kader Masyarakat</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </nav>