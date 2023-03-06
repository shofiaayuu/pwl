@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">HOBI</h3>

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
                            <th>Nama Hobi</th>
                            <th>Alasan</th>
                        </tr>
                @foreach ($hobi as $no => $h)
                <tr>
                    <td>{{$h->no}}</td>
                    <td>{{$h->nama_hobi}}</td>
                    <td>{{$h->alasan}}</td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
    <!-- /.card -->

    </section>
@endsection