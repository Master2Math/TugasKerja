  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">



  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
{{--     <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 400px !important;
        }
    </style>
 --}}




@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>FORM TIM</h1>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                      <form action="{{ route('crudkota.store') }}" id="form" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- csrf dipakai untuk form --}}
{{-- <form action="{{ route('admin.manajmhs.mhs.simpan') }}" id="form" method="post" enctype="multipart/form-data"> --}}
                <div class="card-body">
                      <div class="form-group">
                        <label>Nama TEAM</label>
                        <input type="text" name="nama_kota" class="form-control" placeholder="Enter ..." required="">
                      </div>

                <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Assign Member</label>
                        <br>

                        {{-- ?????????????????????????????????????????????????VARIABEL --}}
                        
                        <select class="selectpicker" multiple data-live-search="true" name="pivot[]" required>
                   <label><strong>Select Category :</strong></label><br/>
                              @foreach($agamas as $agama)
                                   <option value="{{ $agama->id }}"> {{ $agama->name}} </option>
                              @endforeach
                                </select>
                      </div>
                    

      



                    </div>
                  </div>

                </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-info" value="Simpan" >Simpan Dan Lanjut</button>
                </div>
                </form>


              
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->


            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">LIST TEAM</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO.</th>
                    <th>NAMA TEAM</th>
                  </tr>
                  </thead>
{{-- // Add in blade template file
{{ dd($kotas) }}
// dump
<?php dump($array)?>
// dump and die
<?php dd($array)?>
 --}}
            <tbody>
            @foreach($kotas as $index => $kota)
              <tr>
              <td>{{ $index +1 }}</td>
              <td>{{ $kota->nama_kota }}</td>
                             <td class="text-center"> 
              <form action="" method="POST">
                    <a type="button" id="edit" name="edit" class="btn btn-sm btn-warning mb-1 edit" 

                       href="crudkota/edit/{{ $kota->id}}">Edit</a>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')" href="{{ route('crudkota.destroy', ['id' => $kota->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                      
              </form>   
              </td> 
{{-- {{ dd($index) }}
// dump
<?php dump($array)?>
// dump and die
<?php dd($array)?> --}}
{{--               <td>{{ $kota->id_provinsi }}</td> --}}
              </tr>
            @endforeach
          </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->


            <!-- /.card -->
          </div>

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop