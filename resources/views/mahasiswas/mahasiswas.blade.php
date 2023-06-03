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
            <button class="btn btn-sm btn-success my-2" data-toggle="modal" data-target="#modal_mahasiswa">Tambah Data</button>
            <table class="table table-bordered table-striped" id="data_mahasiswa">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            {{-- <th>Foto</th> --}}
                            {{-- <th>Kelas</th> --}}
                            <th>JK</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php /*
                         @if($mhs->count() > 0)
                            @foreach($mhs as $i => $m)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$m->nim}}</td>
                                <td>{{$m->nama}}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $m->foto) }}" alt="{{ $m->nama }}" width="50">
                                </td>
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
                        */?>
                    </tbody>
               
            </table>
        </div>
    </div>
    <!-- /.card -->

    </section>
    {{-- Tambah data modal --}}
    <div class="modal fade" id="modal_mahasiswa" style="display: none;" aria-hidden="true">
        <form method="post" action="{{ url('mahasiswas') }}" role="form" class="form-horizontal" id="form_mahasiswa">
        @csrf
        <div class="modal-dialog modal-">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row form-message"></div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nim" name="nim" value="" />
                        </div>
                    </div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="" />
                        </div>
                    </div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="jk" name="jk" value="" />
                        </div>
                    </div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="tempat_lahir" name="tempat_lahir" value="" />
                        </div>
                    </div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="tanggal_lahir" name="tanggal_lahir" value="" />
                        </div>
                    </div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="" />
                        </div>
                    </div>
                    <div class="form-group required row mb-2">
                        <label class="col-sm-2 control-label col-form-label">No. HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="hp" name="hp" value="" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- Detail modal -->
    <div class="modal fade" id="modal_show_mahasiswa" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">DETAIL MAHASISWA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">NIM</label>
                        <div class="col-sm-10">
                            <span id="show_nim"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <span id="show_nama"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <span id="show_jk"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <span id="show_tempat_lahir"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <span id="show_tanggal_lahir"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <span id="show_alamat"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">No. HP</label>
                        <div class="col-sm-10">
                            <span id="show_hp"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>  
    
    {{-- Delete Modal --}}
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Delete Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   Apakah Yakin Ingin Hapus Data?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('js')
    <script>
        function updateData(th){
        $('#modal_mahasiswa').modal('show');
        $('#modal_mahasiswa .modal-title').html('Edit Data Mahasiswa');
        $('#modal_mahasiswa #nim').val($(th).data('nim'));
        $('#modal_mahasiswa #nama').val($(th).data('nama'));
        $('#modal_mahasiswa #jk').val($(th).data('jk'));
        $('#modal_mahasiswa #tempat_lahir').val($(th).data('tempat_lahir'));
        $('#modal_mahasiswa #tanggal_lahir').val($(th).data('tanggal_lahir'));
        $('#modal_mahasiswa #alamat').val($(th).data('alamat'));
        $('#modal_mahasiswa #hp').val($(th).data('hp'));
        $('#modal_mahasiswa #form_mahasiswa').attr('action', $(th).data('url'));
        $('#modal_mahasiswa #form_mahasiswa').append('<input type="hidden" name="_method" value="PUT">');
    }

    function showData(element) {
        $.ajax({
            url: '{{  url('mahasiswas') }}' + '/' + element,
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                $('#modal_show_mahasiswa').modal('show');
                $('#show_nim').text(data.nim);
                $('#show_nama').text(data.nama);
                $('#show_jk').text(data.jk);
                $('#show_tempat_lahir').text(data.tempat_lahir);
                $('#show_tanggal_lahir').text(data.tanggal_lahir);
                $('#show_alamat').text(data.alamat);
                $('#show_hp').text(data.hp);
            },
            error: function () {
                alert('Error occurred while retrieving data.');
            }
        });
    }


    function deleteData(element) {
        $('#confirmModal').modal('show');
        $('#confirmDelete').off().on('click', function () {
            $.ajax({
                url: '{{ url('mahasiswas/delete') }}' + '/' + element,
                method: 'POST',
                dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (data) {
                    alert(data.message);
                    location.reload();
                },
                error: function () {
                    alert('Error occurred while deleting data.');
                }
            });
        });
    }

    $(document).ready(function(){
        var dataMahasiswa = $('#data_mahasiswa').DataTable({
            processing:true,
            serverSide:true,
            ajax:{
                'url': '{{  url('mahasiswas/data') }}',
                'dataType': 'json',
                'type': 'POST',
            },
            columns:[
                {data:'nomor',name:'nomor', searchable:false, sortable:false},
                {data:'nim',name:'nim', searchable:true, sortable:false},
                {data:'nama',name:'nama', searchable:true, sortable:false},
                {data:'jk',name:'jk', searchable:true, sortable:false},
                {data:'tempat_lahir',name:'tempat_lahir', searchable:true, sortable:false},
                {data:'tanggal_lahir',name:'tanggal_lahir', searchable:true, sortable:false},
                {data:'alamat',name:'alamat', searchable:true, sortable:false},
                {data:'hp',name:'hp', searchable:true, sortable:false},
                {data: 'id',name: 'id',sortable: false,searchable: false,
                        render: function(data, type, row) {
                                var btn =   `<button data-url="{{ url('/mahasiswas')}}/`+data+`" class="btn btn-xs btn-warning" onclick="updateData(this)" data-id="`
                                                +row.id+`" data-nim="`+row.nim+`" data-nama="`+row.nama+`" data-jk="`+row.jk+`" data-tempat_lahir="`
                                                +row.tempat_lahir+`" data-tanggal_lahir="`+row.tanggal_lahir+`" data-alamat="`+row.alamat+`" data-hp="`
                                                +row.hp+`"><i class="fa fa-edit"></i> Edit</button>` +
                                        `<button onclick="showData(`+data+`)" class="btn btn-xs btn-info"><i class="fa fa-list"></i> Detail</button>` +
                                        `<button class="btn btn-xs btn-danger" onclick="deleteData(`+data+`)"><i class="fa fa-trash"></i>Hapus</button>`;
                                    return btn;
                                    
                        }
                }
            ]
        });

        $('#form_mahasiswa').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                method: "POST",
                data: $(this).serialize(),
                dataType: 'json',
                success:function(data){
                    $('.form-message').html('');
                    if(data.status){
                        $('.form-message').html('<span class="alert alert-success" style="width: 100%">' + data.message + '</span>');
                        $('#form_mahasiswa')[0].reset();
                        dataMahasiswa.ajax.reload();
                        $('#form_mahasiswa').attr('action', '{{ url('mahasiswas') }}');
                        $('#form_mahasiswa').find('input[name="_method"]').remove();
                    }else{
                        $('.form-message').html('<span class="alert alert-danger" style="width: 100%">' + data.message + '</span>');
                        alert('error');
                    }

                    if(data.modal_close){
                        $('.form-message').html('');
                        $('#modal_mahasiswa').modal('hide');
                    }

                }
            });
        });
    });
    </script>
@endpush