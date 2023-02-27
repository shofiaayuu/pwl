@extends('layout.template')

@section('content')
<section class="content">

    <!--Default box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halo Selamat Datang</h3>
            <br>
            <h4 class="card-title">Selamat datang di dashboard  </h4>

        </div>
        

        <!-- /.card-footer -->
    </div>
    <!-- /.card -->

</section>

@endsection
@push('js')
    <script>
      alert('Selamat Datang di Dashboard!!!')
    </script>
@endpush