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
    <h1>FORM PPDB</h1>
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
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                      <form action="{{ route('tampildata.update') }}" id="form" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- csrf dipakai untuk form --}}
{{-- <form action="{{ route('admin.manajmhs.mhs.simpan') }}" id="form" method="post" enctype="multipart/form-data"> --}}


                <div class="card-body">

        <input type="hidden" name="id" value="{{ $tampil->id }}">


                  <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->nik}}">

                      </div>
                      <div class="form-group">
                        <label>Nama Peserta</label>
                        <input type="text" name="nama_peserta" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->nama_peserta}}">
                      </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control select2">
                  <option value="{{ $tampil->jenis_kelamin }}"> {{ $tampil->jenis_kelamin}} </option> 
                          <option>Laki-Laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                      <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Enter ..."  required="" readonly value="{{ $tampil->tempat_lahir}}">
                      </div>
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Enter ..."  required="" readonly value="{{ $tampil->tanggal_lahir}}">
                      </div>
                                    <div class="row">
                    <div class="col-sm-12">

                      <!-- select -->
                      <div class="form-group">
                        <label>Agama</label>
                  <select name="agama_id" id="select_agama_id" class="form-control select2  @error('agama_id') is-invalid @enderror" required disabled="true">

                  <option value="{{ $tampil->agama->id }}"> {{ $tampil->agama->nama_agama}} 
                            @foreach($agamas as $item)
                                  <option value="{{ $item->id }}"> {{ $item->nama_agama}} </option>
                            @endforeach
                                </select>
                      </div>
                       <input type="hidden" name="agama_id" value="{{ $tampil->agama->id }}">
                    </div>

                  </div>

                <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Warga Negara</label>
                        <select name="warga_negara" class="form-control select2">
                  <option value="{{ $tampil->warga_negara }}"> {{ $tampil->warga_negara }} </option>
                          <option>Indonesia</option>
                          <option>Asing</option>
                        </select>
                      </div>
                       <input type="hidden" name="warga_negara" value="{{$tampil->warga_negara }}">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->


              
            </div>
            <!-- /.card -->

            <!-- general form elements -->

            <!-- /.card -->
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                      <div class="form-group">
                        <label>Hobi</label>
                        <input type="text" name="hobi" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->hobi}}">
                      </div>
                      <div class="form-group">
                        <label>Cita-cita</label>
                        <input type="text" name="cita_cita" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->cita_cita}}">
                      </div>
                      <div class="form-group">
                        <label>Jumlah Saudara Kandung</label>
                        <input type="text" name="jumlah_saudara" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->jumlah_saudara}}">
                      </div>
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
             
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->


            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                    <div class="col-sm-6">

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Kota</label>
                        <select name="kota_id" id="select_kota_id" class="form-control select2  @error('kota_id') is-invalid @enderror" >
                  <option value="{{ $tampil->kota->id }}"> {{ $tampil->kota->nama_kota}} </option>
                              @foreach($kotas as $kota)
                              <option value="{{ $kota->id }}"> {{ $kota->nama_kota}} </option>
                              @endforeach
                              {{-- value="id" > ""nama" --}}
                                </select>
                      </div>
                    </div>
                  </div>

                <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Kecamatan</label>
                        <select name="kecamatan_id" id="select_kecamatan_id" class="form-control select2  @error('kecamatan_id') is-invalid @enderror">
                  <option value="{{ $tampil->kecamatan->id }}"> {{ $tampil->kecamatan->nama_kecamatan}} </option>
                              @foreach($kecamatans as $kecamatan)
                              <option value="{{ $kecamatan->id }}"> {{ $kecamatan->nama_kecamatan}} </option>
                              @endforeach
                              {{-- value="id" > ""nama" --}}
                                </select>
                      </div>
                    </div>
                  </div> 

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Kelurahan</label>
                        <select name="kelurahan_id" id="select_kelurahan_id" class="form-control select2  @error('kelurahan_id') is-invalid @enderror">
                  <option value="{{ $tampil->kelurahan->id }}"> {{ $tampil->kelurahan->nama_kelurahan}} </option>
                              @foreach($kelurahans as $kelurahan)
                              <option value="{{ $kelurahan->id }}"> {{ $kelurahan->nama_kelurahan}} </option>
                              @endforeach
                              {{-- value="id" > ""nama" --}}
                                </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" name ="alamat" placeholder="Enter ..." required="" readonly value="{{ $tampil->alamat}}" >{{ $tampil->alamat}}</textarea>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- checkbox -->

                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->

                    </div>
                  </div>

                  <div class="row">


                  </div>


                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Custom Elements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->email}}" >
                      </div>
                      </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->nama_ayah}}" >
                      </div>
                      </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Nama Ayah</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->nama_ibu}}" >
                      </div>
                      </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>No. HP / WA Orang Tua</label>
                        <input type="text" name="nomor_hp" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->nomor_hp}}">
                      </div>
                    </div>
                  </div>

                
              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
                          <div class="card-footer">
                  <button type="submit" class="btn btn-info" value="Simpan" >Simpan Dan Lanjut</button>
                </div>
                </form>
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