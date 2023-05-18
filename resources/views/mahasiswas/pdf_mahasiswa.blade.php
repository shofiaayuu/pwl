<!DOCTYPE html>
<html>
<head>
    <title>Laporan KRS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .text-center {
            text-align: center;
        }
        .table {
            width: 100%;
            margin: 0 1rem;
            color: #212529;
            border: 3px solid #262626;
        }
        table tr td, table tr th {
            border: 1px solid #262626;
            padding: 0.5rem;
        }
    </style>
</head>
<body>
<div class="text-center">
    <h3>Laporan KRS</h3>
</div>
<ul>
    <li><b>Nim : </b>{{ $mahasiswas->nim }}</li>
    <li><b>Nama : </b>{{ $mahasiswas->nama }}</li>
    <li><b>Kelas : </b>{{ $mahasiswas->kelas->nama_kelas }}</li>
    <li><b>Jenis Kelamin : </b>{{ $mahasiswas->jk }}</li>
    <li><b>Tempat Lahir : </b>{{ $mahasiswas->tempat_lahir }}</li>
    <li><b>Tanggal Lahir : </b>{{ $mahasiswas->tanggal_lahir }}</li>
    <li><b>Alamat : </b>{{ $mahasiswas->alamat }}</li>
    <li><b>No. Hp : </b>{{ $mahasiswas->hp }}</li>
</ul>
<table class="table text-center">
    <thead>
    <tr>
        <th>Kode</th>
        <th>MataKuliah</th>
        <th>SKS</th>
        <th>Nama Dosen</th>
        <th>Jam</th>
        <th>Semester</th>
        <th>Nilai</th>
    </tr>
    </thead>
    <tbody>
        @if($khs->count() > 0)
        @foreach($khs as $row)
            <tr>
                <td>{{ $row->mata_kuliah->kode_mk }}</td>
                <td>{{ $row->mata_kuliah->nama_matkul }}</td>
                <td>{{ $row->mata_kuliah->sks }}</td>
                <td>{{ $row->mata_kuliah->nama_dosen }}</td>
                <td>{{ $row->mata_kuliah->jam }}</td>
                <td>{{ $row->mata_kuliah->semester }}</td>
                <td>{{ $row->nilai}}</td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="6" class="text-center">Data tidak ada</td>
        </tr>
    @endif
    </tbody>
</table>
</body>
</html>