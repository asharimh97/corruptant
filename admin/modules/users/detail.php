<?php 
  if(empty($id) || !is_numeric($id)){
    $act->alertBack("Maaf halaman tidak bisa diakses!") ;
  }else{
    // cek data cek
    $sel = $act->selectWhere("user", "`id` = '$id'") ;
    if($sel->num_rows == 0){
      $act->alertBack("Tidak ada data!") ;
    }else{
      $user = $sel->fetch_object() ;
    }
  }
?>
<div class="row">
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="#">
                    <img src="<?php echo ADMIN ;?>assets/img/profile-avatar.jpg" alt="">
                </a>
                <h1><?php echo $user->nama ;?></h1>
                <p><?php echo $user->email?></p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"> <i class="icon-user"></i> Profil Pengguna</a></li>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <div class="bio-graph-heading">
                <?php echo "Saya sangat suka dengan web yang seperti ini, seperti saya benar-benar berkomunikasi dengan pemerintah secara langsung" ;?>
            </div>
            <div class="panel-body bio-graph-info">
                <h1>Informasi user</h1>
                <div class="row">
                    <div class="bio-row">
                        <p><span>Nama Lengkap </span>: <?php echo $user->nama?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Username</span>: <a href="<?php echo ADMIN.'index.php?modules=users&actions=detail&id='.$id ;?>">@<?php echo $user->username ;?></a></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Jenis Kelamin</span>: <?php if($user->jenis_kelamin == 'L') echo 'Laki-laki' ; else echo 'Perempuan' ;?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>TTL</span>: <?php echo $user->tempat_lahir.', '.dateConvert($user->tanggal_lahir) ;?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>NIK</span>: <?php echo $user->nik ;?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Total Aspirasi </span>: <?php echo $user->aspirasi ; ;?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Lokasi </span>: <?php echo $user->alamat.','.$user->tempat_lahir ;?></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
            <div class="col-sm-12">
            </div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="bio-chart">
                            <?php $asp = $act->selectWhere("aspirasi", "`id_user` = '$id'") ;?>
                                <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php echo $asp->num_rows ;?>" data-fgColor="#e06b7d" data-bgColor="#e8e8e8" readonly>
                            </div>
                            <div class="bio-desk">
                                <h4 class="red">Jumlah Aspirasi</h4>
                                <p>Jumlah pengguna memberikan aspirasinya</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="bio-chart">
                            <?php $laporan = $act->selectWhere("laporan", "`id_user` = '$id'") ;?>
                                <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php echo $laporan->num_rows ;?>" data-fgColor="#4CC5CD" data-bgColor="#e8e8e8" readonly>
                            </div>
                            <div class="bio-desk">
                                <h4 class="terques">Jumlah Laporan</h4>
                                <p>Jumlah pengguna memberikan laporannya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
</div>
<div class="row">
    <div class="col-md-6">
        
        <section class="panel">
            <header class="panel-heading">
                <h4>Daftar aspirasi <?php echo $user->username ;?></h4>
            </header>
            <div class="panel-body">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Pendukung</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php 
                        if($asp->num_rows == 0) danger("Tidak ada data!") ;
                        else{
                            $no = 1 ;
                            while($s_asp = $asp->fetch_object()){
                    ?> 
                    <tr>
                        <td><?php echo $no ;?></td>
                        <td><a href="<?php echo ADMIN.'index.php?modules=aspirasi&actions=detail&id='.$s_asp->id_aspirasi ;?>"><?php echo $s_asp->judul ;?></a></td>
                        <td><?php echo dateConvert($s_asp->tgl_aspirasi) ;?></td>
                        <td><?php echo $s_asp->pendukung ;?></td>
                        <td><a href="<?php echo ADMIN.'index.php?modules=aspirasi&actions=detail&id='.$s_asp->id_aspirasi ;?>" class="btn btn-success btn-xs"><span class="icon-eye-open"></span></a></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
            </div>
        </section>

    </div>
    <div class="col-md-6">
        
        <section class="panel">
            <header class="panel-heading">
                <h4>Daftar laporan <?php echo $user->username ;?></h4>
            </header>
            <div class="panel-body">
                <table class="table table-hover table-striped">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Lembaga Tujuan</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php 
                        if($laporan->num_rows == 0) danger("Tidak ada data!") ;
                        else{
                            $noo = 1 ;
                            while($lap = $laporan->fetch_object()){
                    ?> 
                    <tr>
                        <td><?php echo $noo ;?></td>
                        <td><a href="<?php echo ADMIN.'index.php?modules=laporan&actions=detail&id='.$lap->id_laporan ;?>"><?php echo $lap->judul ;?></a></td>
                        <td><?php echo dateConvert($lap->tgl_laporan) ;?></td>
                        <td>
                        <?php 
                            $selap = $act->selectWhere("lembaga", "`id_lembaga` = '".$lap->lembaga_tujuan."'") ;
                            echo $selap->fetch_object()->nama ;
                        ;?>
                        </td>
                        <td><a href="<?php echo ADMIN.'index.php?modules=laporan&actions=detail&id='.$lap->id_laporan ;?>" class="btn btn-success btn-xs"><span class="icon-eye-open"></span></a></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </table>
            </div>
        </section>

    </div>
</div>