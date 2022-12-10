<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Absensi</title>
</head>

<body>

    <form action="/mahasiswa/{{$mahasiswa->id}}" method="post">
        @csrf
        @method('put')
        <span>Nama</span>
        <input type="nama" name="nama" value="{{$mahasiswa->nama}}"><br>
        <span>NIM</span>
        <input type="text" name="nim" value="{{$mahasiswa->nim}}"><br>
        <span>Kelas</span>
        <input type="text" name="kelas" value="{{$mahasiswa->kelas}}"><br>
        <span>Jenis Kelamin</span>
        <input type="text" name="jk" value="{{$mahasiswa->jenis_kelamin}}"><br>
        <span>Angkatan</span>
        <input type="text" name="angkatan" value="{{$mahasiswa->angkatan}}"><br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>
