<html>
<body>
<center>
    <h2><b>Biodata</b></h2>
    <a href="tambah.php">Tambah</a>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </tr>

    <?php
    include 'database.php';
    $biodata = new biodata();
    $no = 1;
    foreach($biodata->index() as $data){
    ?>
    <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $data['nama'];?></td>
    <td><?php echo $data['tanggal_lahir'];?></td>

    <td><a href="show.php?id=<?php echo $data['id'];?>">Tampil | </a>
    <a href="edit.php?id=<?php echo $data['id'];?>">Ubah | </a>
    <a href="proses.php?id=<?php echo $data['id'];?> & aksi=delete" onclick="return confirm('Apakah Anda 
    Yakin Mau Menghapus Data Ini?')">Hapus</a>
    </td>
    </tr>
    <?php
         }
         ?>
    </table>
    </body>
    </html>
