<?php 	
	/*$nip =  rand().rand().rand() ;
	
	echo $act->enc("dumb") ;
	
	$nomor = "08".rand().rand() ;
	
	echo "<br>" ;
	
	if(!empty($_POST)){
		extract($_POST) ;
		if(empty($lembaga) || empty($alamat) || empty($cat)){
			echo "ERROR! DATA HARUS TERISI LENGKAP" ;
		}else{
			$ins = $act->insert("lembaga", "'$lembaga', '$alamat', '$cat', '$pj', '$nip', '$nomor', '0'");
			
			if($ins){
				echo "DATA MASUK!" ;
			}else{
				echo "MAJU MUNDUR CANTIK!" ;
			}
		}
	}*/
?>
<!-- <form method="POST" action="">
	Nama Lembaga : <input type="text" name="lembaga" maxlength="100" autofocus><br />	
	PJ/ Ketua Lembaga : <input type="text" name="pj" maxlength="50"><br />	
	Alamat : <textarea name="alamat"></textarea><br />
	Kategori : <select name="cat">
		<?php 
			$sele = $act->selectAll("kategori_lembaga") ;
			while($rows = $sele->fetch_object()){
		?>
			<option value="<?php echo $rows->id_kategori ;?>"><?php echo $rows->kategori ;?></option>
		<?php
			}
		?>
	</select>
	
	<input type="submit" value="Tambahkan!">
</form> -->