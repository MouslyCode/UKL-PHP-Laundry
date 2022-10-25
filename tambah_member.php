<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
     crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Member</h3>
    <form action="proses_tambah_member.php" method="post">
        Nama Member :
        <input type="text" name="nama_member" value="" class="form-control">
        Alamat : 
        <input type="text" name="alamat" value="" class="form-control">
        Jenis Kelamin : 
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="Laki-laki">L</option>
            <option value="Perempuan">P</option>
        </select>
        Telepon : 
        <input type="text" name="tlp" value="" class="form-control">
        Kota : 
        <input type="text" name="kota" value="" class="form-control">
        Provinsi : 
        <input type="text" name="provinsi" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Member" class="btn btn-primary" href = "tampil_member.php"> 
        
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
</body>