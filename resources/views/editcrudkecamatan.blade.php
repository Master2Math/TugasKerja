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

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>FORM EDIT KECAMATAN</h1>
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
                <h3 class="card-title">FORM</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                      <form action="{{ route('crudkecamatan.update') }}" id="form" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- csrf dipakai untuk form --}}
{{-- <form action="{{ route('admin.manajmhs.mhs.simpan') }}" id="form" method="post" enctype="multipart/form-data"> --}}
                <div class="card-body">
                      <div class="form-group">
                        <label>Nama KECAMATAN</label>
                        <input type="text" name="nama_kecamatan" class="form-control" placeholder="Enter ..." required="" value="{{ $kecamatan->nama_kecamatan }}">
                      </div>
                      <input type="hidden" name="id" value="{{ $kecamatan->id }}">

                <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Nama Kota</label>
                        <select name="kota_id" id="select_kota_id" class="form-control select2  @error('kota_id') is-invalid @enderror">
                  <option value="{{ $kecamatan->kota->id }}"> {{ $kecamatan->kota->nama_kota}} </option>
                              @foreach($kotas as $kota)
                              <option value="{{ $kota->id }}"> {{ $kota->nama_kota}} </option>
                              @endforeach
                              {{-- value="id" > ""nama" --}}
                                </select>
                      </div>
                    </div>
                  </div>





                </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-info" value="Simpan" >Edit Dan Simpan</button>
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
                <h3 class="card-title">DATA KECAMATAN</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO.</th>
                    <th>NAMA KOTA</th>
                    <th>NAMA KECAMATAN</th>
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
            @foreach($kecamatans as $index => $kecamatan)
              <tr>
              <td>{{ $index +1 }}</td>
              <td>{{ $kecamatan->kota->nama_kota }}</td>
              <td>{{ $kecamatan->nama_kecamatan }}</td>
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