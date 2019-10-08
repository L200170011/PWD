<?php
	$conn= mysqli_connect('localhost', 'root', '','penyimpanan');
	
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];
	$lokasi=$_POST['lokasi'];
	$submit=$_POST['submit'];
	$update="UPDATE gudang set kode_gudang='$kode', nama_gudang='$nama',lokasi='$lokasi' WHERE kode_gudang='$kode' ";
	
	if($submit){
		if ($kode=''){
			echo "kode tidak boleh kosong, diisi dulu";
		}elseif ($nama=''){
			echo "Nama tidak boleh kosong";
		}elseif ($lokasi=''){
			echo "Lokasi tidak boleh kosong";
		}if ($kode=''){
			echo "kode tidak boleh kosong, diisi dulu";
		}else
			mysqli_query($conn,$update);
			echo "
			<script>
			alert('data berhasil di update');
			document.location.href='form_gudang.php';
			</script>";
		}
	
?>