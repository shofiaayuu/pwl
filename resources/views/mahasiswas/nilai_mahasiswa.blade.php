@extends('layout.template')

@section('content')
    <h4 class="text-center">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h4>
    <h3 class="text-center">KARTU HASIL STUDI (KHS)</h3>

    <p><span class="font-weight-bold">Nama :</span> {{$mahasiswas->nama}}</p>
    <p><span class="font-weight-bold">NIM :</span> {{$mahasiswas->nim}}</p>
    <p><span class="font-weight-bold">Kelas :</span> {{$mahasiswas->kelas->nama_kelas}}</p>

    <table class="table table-striped">
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
@endsection