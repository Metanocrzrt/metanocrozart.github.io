<link rel="stylesheet" href="crud.css">
<?php

include 'koneksi.php';

	
  $nama_sepatu   = $_POST['nama_sepatu'];
  $deskripsi     = $_POST['deskripsi'];
  $harga_beli    = $_POST['harga_beli'];
  $harga_jual    = $_POST['harga_jual'];
  $gambar_sepatu = $_FILES['gambar_sepatu']['name'];



if($gambar_sepatu != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); 
  $x = explode('.', $gambar_sepatu); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_sepatu']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_sepatu; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
                  $query = "INSERT INTO sepatu (nama_sepatu, deskripsi, harga_beli, harga_jual, gambar_sepatu) VALUES ('$nama_sepatu', '$deskripsi', '$harga_beli', '$harga_jual', '$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='form.php';</script>";
                  }

            } else {     
             
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_sepatu.php';</script>";
            }
} else {
   $query = "INSERT INTO sepatu (nama_sepatu, deskripsi, harga_beli, harga_jual, gambar_sepatu) VALUES ('$nama_sepatu', '$deskripsi', '$harga_beli', '$harga_jual', null)";
                  $result = mysqli_query($koneksi, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='form.php';</script>";
                  }
}

 
