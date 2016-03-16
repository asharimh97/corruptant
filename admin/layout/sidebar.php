<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li <?php if(empty($_GET)) echo 'class="active"' ;?>>
                <a class="" href="<?php echo ADMIN ;?>index.php">
                    <i class="icon-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li <?php if(!empty($_GET) && $_GET['modules'] == "users") echo 'class="active"' ;?>>
                <a class="" href="<?php echo ADMIN ;?>index.php?modules=users&&actions=index">
                    <i class="icon-book"></i>
                    <span>Users</span>
                </a>
            </li>
            <li <?php if(!empty($_GET) && ($_GET['modules'] == "bahaya" || $_GET['modules'] == "aman")) echo 'class="active"' ; else echo 'class="sub-menu"' ;?>>
                <a href="javascript:;" class="">
                    <i class="icon-th"></i>
                    <span>Data</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="<?php echo ADMIN ;?>index.php?modules=proyek&&actions=index">Data Proyek</a></li>
                    <li><a class="" href="<?php echo ADMIN ;?>index.php?modules=provinsi&&actions=index">Data Provinsi</a></li>
                    <li><a class="" href="<?php echo ADMIN ;?>index.php?modules=lembaga&&actions=index">Data Lembaga</a></li>
                </ul>
            </li>
            <li <?php if(!empty($_GET) && $_GET['modules'] == "aspirasi") echo 'class="active"' ;?>>
                <a class="" href="<?php echo ADMIN ;?>index.php?modules=aspirasi&&actions=index">
                    <i class="icon-user"></i>
                    <span>Aspirasi</span>
                </a>
            </li>
            <li <?php if(!empty($_GET) && $_GET['modules'] == "laporan") echo 'class="active"' ;?>>
                <a class="" href="<?php echo ADMIN ;?>index.php?modules=laporan&&actions=index">
                    <i class="icon-envelope"></i>
                    <span>Laporan</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->