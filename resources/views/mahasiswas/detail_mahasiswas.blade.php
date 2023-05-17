@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DETAIL DATA MAHASISWA</h3>

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
            <div class="d-flex justify-content-center">
                <img src="{{ asset('storage/' . $mahasiswas->foto) }}" width="240">
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nim : </b>{{$mahasiswas->nim}}</li>
                <li class="list-group-item"><b>Nama : </b>{{$mahasiswas->nama}}</li>
                <li class="list-group-item"><b>Kelas : </b>{{$mahasiswas->kelas->nama_kelas}}</li>
                <li class="list-group-item"><b>JK : </b>{{$mahasiswas->jk}}</li>
                <li class="list-group-item"><b>Tempat Lahir : </b>{{$mahasiswas->tempat_lahir}}</li>
                <li class="list-group-item"><b>Tanggal Lahir : </b>{{$mahasiswas->tanggal_lahir}}</li>
                <li class="list-group-item"><b>Alamat : </b>{{$mahasiswas->alamat}}</li>
                <li class="list-group-item"><b>HP : </b>{{$mahasiswas->hp}}</li>
            </ul>
        </div>
    </div>
    <!-- /.card -->

    </section>
@endsection