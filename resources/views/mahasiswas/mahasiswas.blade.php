@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Mahasiwa</h3>

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
            <a href="{{url('mahasiswas/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
            <table class="table table-bordered table-striped">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>JK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <body>
                        @if($mhs->count() > 0)
                            @foreach($mhs as $i => $m)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$m->nim}}</td>
                                <td>{{$m->nama}}</td>
                                <td>{{$m->kelas->nama_kelas}}</td>
                                <td>{{$m->jk}}</td>
                                <td>{{$m->tempat_lahir}}</td>
                                <td>{{$m->tanggal_lahir}}</td>
                                <td>{{$m->alamat}}</td>
                                <td>{{$m->hp}}</td>
                                
                                <td>
                                    {{-- Bikin simbol show,edit dan delete --}}
                                    <a href="{{url('/mahasiswas/'.$m->id)}}" 
                                        class="btn btn-sm btn-primary">show</a>

                                    <a href="{{url('/mahasiswas/'.$m->id.'/edit')}}" 
                                        class="btn btn-sm btn-warning">edit</a>
                                    
                                    <form method="POST" action="{{url('/mahasiswas/'.$m->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                                    </form>

                                    <a href="{{url('/mahasiswas/'.$m->id.'/khs')}}" 
                                        class="btn btn-sm btn-primary">nilai</a>

                
                                    
                                </td>
                            </tr>
                            @endforeach
                            
                        @else
                            <tr><td colspan="9" class="text-center">Data Tidak Ada</td></tr>
                        @endif
                    </body>
               
            </table>
        </div>
    </div>
    <!-- /.card -->

    </section>
@endsection