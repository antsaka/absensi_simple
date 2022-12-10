<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Mahasiswa</title>
</head>
<body>
    <table>
        <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Kelas</td>
            <td>Angkatan</td>
            <td>Aksi</td>
        </tr>
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->jenis_kelamin }}</td>
            <td>{{ $mahasiswa->kelas }}</td>
            <td>{{ $mahasiswa->angkatan }}</td>
            <td>
                <a href="/mahasiswa/{{ $mahasiswa->id }}/edit">Edit</a>
            </td>
                <form action="/mahasiswa/{{ $mahasiswa->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <td>
                        <button type="submit">Delete</button>
                    </td>
                </form>
        </tr>
        @endforeach
    </table>
</body>
</html>