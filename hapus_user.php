<?php 
    if($_GET['id']){
        include "koneksi.php";
        $qry_hapus_user=mysqli_query($conn,"delete from user where id='".$_GET['id']."'");
        if($qry_hapus_user){
            echo "<script>alert('Sukses Hapus User');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal Hapus User');location.href='tampil_user.php';</script>";
        }
    }
?>