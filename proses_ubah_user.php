<?php
if($_POST){
    $id=$_POST['id'];
    $nama_user=$_POST['nama_user'];
    $role=$_POST['role'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama_user)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama='".$nama_user."', 
            role='".$role."',  username='".$username."'
            where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id="
                .$id."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama_user='".$nama_user."',
             role='".$role."', username='".$username."', 
            password='".md5($password)."'where id = '".$id."'")
             or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id="
                .$id."';</script>";
            }
        }
        
    } 
}
?>
                                                