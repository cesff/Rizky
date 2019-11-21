<html>
<head>
    <title>CRUD</title>
</head>

<body>
    <center><b>Silahkan Isi Biodata!</b></center>

    <form action="proses.php?aksi=tambah" method="post">

        <label><b>Nama</b></label>
        <input type="text" name="nama" class="form-control" placeholder="Nama....." required>
        <br>
        <br>
        <label><b>Tanggal Lahir</b></label>
        <input type="date" name="tanggal_lahir">
        <br>
        <br>
        <button type="submit" name="simpan" value="Kirim">Kirim</button>

    </form>
    </body>
    </html>    