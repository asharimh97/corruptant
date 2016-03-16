<section id="page-title" class="cvr">
    <div class="container clearfix">
        <h1>PROYEK</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo BASEPATH ;?>">Depan</a></li>
            <li>Program Pemerintah</li>
            <li class="active">Nama Program</li>
        </ol>
    </div>
</section>
<?php 
	if(!empty($id)){
		echo "Anda sedang berada di halaman proyek dengan id ke -".$id ;
	}else{
		$act->redir("pantau") ;
	}
?>