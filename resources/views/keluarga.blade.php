@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DAFTAR KELUARGA </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widge="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widge="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>Status Keluarga</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Pekerjaan</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                        </tr>
                @foreach ($keluarga as $no => $kl)
                <tr>
                    <td>{{$kl->no}}</td>
                    <td>{{$kl->nama}}</td>
                    <td>{{$kl->status}}</td>
                    <td>{{$kl->tempat_lahir}}</td>
                    <td>{{$kl->tgl_lahir}}</td>
                    <td>{{$kl->jenis_kelamin}}</td>
                    <td>{{$kl->pekerjaan}}</td>
                    <td>{{$kl->agama}}</td>
                    <td>{{$kl->alamat}}</td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
    <!-- /.card -->

    </section>
@endsection