<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Absensi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <form action="/mahasiswa" method="post">
        @csrf
        <span>Nama</span>
        <input type="nama" name="nama"><br>
        <span>NIM</span>
        <input type="text" name="nim"><br>
        <span>Kelas</span>
        <input type="text" name="kelas"><br>
        <span>Jenis Kelamin</span>
        <input type="text" name="jk"><br>
        <span>Angkatan</span>
        <input type="text" name="angkatan"><br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>
