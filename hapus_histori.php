<?php
    include "koneksi.php";
    $qry_hapus=mysqli_query($conn,"delete from detil_transaksi");
    $qry_hapus_transaksi=mysqli_query($conn,"delete from transaksi");
    $AI_transaksi=mysqli_query($conn,"alter table transaksi auto_increment = 1");
    $AI_detil_transaksi=mysqli_query($conn,"alter table detil_transaksi auto_increment = 1");
    if($qry_hapus and $qry_hapus_transaksi and $AI_transaksi and $AI_detil_transaksi){
        echo "<script>alert('Sukses hapus transaksi');location.href='pesan.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus transaksi');location.href='histori_pembelian.php';</script>";
    }
?>
