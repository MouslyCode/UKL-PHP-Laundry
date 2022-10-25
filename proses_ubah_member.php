<?php
if($_POST){
    $id=$_POST['id'];
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    $kota=$_POST['kota'];
    $provinsi=$_POST['provinsi'];
    if(empty($nama_member)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($tlp)){
        echo "<script>alert('Nomor telepon tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";  
        $update=mysqli_query($conn,"update member set nama_member='".$nama_member."',
             alamat='".$alamat."',jenis_kelamin='".$jenis_kelamin."',tlp='".$tlp."',kota='".$kota."',provinsi='".$provinsi."' where id = '".$id."'")
             or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id="
                .$id."';</script>";
            }
        }
        
    } 
?>