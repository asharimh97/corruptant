<?php 
  if(empty($id) || !is_numeric($id)){
    $act->alertBack("Maaf halaman tidak bisa diakses!") ;
  }else{
    // cek data cek
    $sel = $act->selectWhere("proyek", "`id_proyek` = '$id'") ;
    if($sel->num_rows == 0){
      $act->alertBack("Tidak ada data!") ;
    }else{
      $proyek = $sel->fetch_object() ;
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
                <h1><?php echo $proyek->pj ;?></h1>
                <p>NIP.<?php echo $proyek->nik_pj?><br>Telepon : <?php echo $proyek->telp_pj?></p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"> <i class="icon-user"></i> Penanggung Jawab Proyek</a></li>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <div class="bio-graph-heading">
                <?php echo $proyek->desc ;?>
            </div>
            <div class="panel-body bio-graph-info">
                <h1>Informasi Proyek</h1>
                <div class="row">
                    <div class="bio-row">
                        <p><span>Nama Proyek </span>: <?php echo $proyek->nama_proyek?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Nama Lembaga </span>: 
                        <?php 
                          $id_lem = $proyek->lembaga ;
                          $sel2 = $act->selectWhere("lembaga", "`id_lembaga` = '$id_lem'");

                          echo $sel2->fetch_object()->nama ;
                        ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Tanggal Mulai </span>: <?php echo dateConvert($proyek->tgl_mulai) ;?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Tanggal Target </span>: <?php echo dateConvert($proyek->tgl_target) ;?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Kerjasama</span>: <?php echo $proyek->kerjasama ;?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Biaya </span>: Rp<?php echo number_format($proyek->dana, 2, ",", ".") ;?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Status Proyek </span>: 
                        <?php 
                          $stat = $proyek->status_proyek ;
                          if( $stat == "Berjalan") echo '<span class="label label-warning">Berjalan</span>' ;
                          elseif($stat == "Berhenti") echo '<span class="label label-danger">Berhenti</span>' ;
                          elseif($stat == "Selesai") echo '<span class="label label-success">Selesai</span>';
                        ?>
                        </p>
                    </div>
                    <div class="bio-row">
                        <p><span>Lokasi </span>: <?php echo $proyek->lokasi ;?></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
            <div class="col-sm-12">
              <?php 
                $target = (string) $proyek->tgl_target ;
                $mulai = (string) $proyek->tgl_mulai ;
                $sek = (string) date("Y-m-d") ;
                $ta = new DateTime($target) ;
                $mu = new DateTime($mulai) ;
                $se = new DateTime($sek) ;

                $tar = (int) $ta->diff($mu)->days ;
                $fak = (int) $se->diff($mu)->days ;
                $harus =  number_format(($fak/$tar*100),0,".",",") ;
              if($harus > $proyek->progress) dangerNo("Perlu ditindaklanjuti") ;
              else info("Kinerjanya bagus!") ;
            ?>
            </div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="bio-chart">
                                <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php echo $proyek->progress ;?>" data-fgColor="#e06b7d" data-bgColor="#e8e8e8" readonly>
                            </div>
                            <div class="bio-desk">
                                <h4 class="red">Kondisi Saat Ini</h4>
                                <p>Mulai : <?php echo dateConvert($proyek->tgl_mulai) ;?></p>
                                <p>Target : <?php echo dateConvert($proyek->tgl_target) ;?></p>
                                <p>Hari ini : <?php echo dateConvert(date("Y-m-d")) ;?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="bio-chart">
                                <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php echo $harus ;?>" data-fgColor="#4CC5CD" data-bgColor="#e8e8e8" readonly>
                            </div>
                            <div class="bio-desk">
                                <h4 class="terques">Target Proyek</h4>
                                <p>Mulai : <?php echo dateConvert($proyek->tgl_mulai) ;?></p>
                                <p>Target : <?php echo dateConvert($proyek->tgl_target) ;?></p>
                                <p>Hari ini : <?php echo dateConvert(date("Y-m-d")) ;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
</div>