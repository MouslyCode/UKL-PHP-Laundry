<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous">
    </head>
    <body>
        <h2>Histori Transaksi</h2>
        <table class="table table-hover">
            <thead style="text-align:center;">
                <th>NO</th>
                <th>Nama Member</th>
                <th>Tanggal Transaksi</th>
                <th>Batas Waktu</th>
                <th>Tanggal Bayar</th>
                <th>Status Order</th>
                <th>Status Bayar</th><th colspan="3">Aksi</th>
            </thead>
            <tbody style="text-align:center;">
                <?php 
                    include "koneksi.php";
                    $qry_histori=mysqli_query($conn,"select *,transaksi.id AS id from transaksi 
                    join member on transaksi.id_member = member.id order by transaksi.id desc");
                    $no=0;
                    while($dt_histori=mysqli_fetch_array($qry_histori)){
                        $no++;
                        $button_lunas="<a href='lunas.php?id=".$dt_histori['id']."' 
                        class='btn btn-success' onclick='return confirm(\"Apakah anda yakin?\")'>Lunas</a>";
                        $button_proses="<a href='update_transaksi.php?id=".$dt_histori['id']."' 
                        class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Proses</a>";
                        $button_selesai="<a href='update_transaksi.php?id=".$dt_histori['id']."' 
                        class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Selesai</a>";
                        $button_diambil="<a href='update_transaksi.php?id=".$dt_histori['id']."' 
                        class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Diambil</a>";
                        $button_cetak="<a href='cetak.php?id=".$dt_histori['id']."' 
                        class='btn btn-warning'>Cetak</a>";
                        $button_cetak_detail="<a href='detil_transaksi.php?id=".$dt_histori['id']."'
                         class='btn btn-warning'>Cetak Detail</a>";
                    ?>
                <tr>
                    <td><?=$no?></td><td><?=$dt_histori['nama_member']?></td>
                    <td><?=$dt_histori['tgl']?></td>
                    <td><?=$dt_histori['batas_waktu']?></td>
                    <td><?=$dt_histori['tgl_bayar']?></td>
                    <td><?=$dt_histori['status_order']?></td>
                    <td><?=$dt_histori['status_bayar']?></td>
                    <?php if($dt_histori['status_bayar']=='belum_bayar'){ ?>
                            <td><?=$button_lunas?></td>
                    <?php        
                        }
                    ?>
                    <?php if($dt_histori['status_order']=='baru'){ ?>
                            <td><?=$button_proses?></td>
                    <?php        
                        }
                    ?>
                    <?php if($dt_histori['status_order']=='proses'){ ?>
                            <td><?=$button_selesai?></td>
                    <?php        
                        }
                    ?>
                    <?php if($dt_histori['status_order']=='selesai'){ ?>
                            <td><?=$button_diambil?></td>
                    <?php        
                        }
                    ?>
                    <td><?=$button_cetak?></td>
                    <td><?=$button_cetak_detail?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <ul>
        <a href="hapus_histori.php" onclick="return confirm('Apakah anda ingin menghapus semua history?')" 
        class="btn btn-secondary"> Hapus Histori</a>
    </body>
</html>