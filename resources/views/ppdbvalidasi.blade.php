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
@if(Session::has('flash_message_error'))
  <div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert"></button>
                        <strong style="color:black; text-align:center;">
                        
                        @foreach(session('flash_message_error') as $item)
                          <p>{{$item}}</p>
                        @endforeach
                      </strong>
    </div>
    @endif
    <h1>FORM VALIDASI PERTANYAAN</h1>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}
        <!-- Main content -->
    <section class="content">
      @if (\Session::has('failed'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('failed') !!}</li>
        </ul>
    </div>
@endif
      <div class="container-fluid">

        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Survey</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                              



          </tbody>

                      <form action="{{ route('validasi.update') }}" id="form" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- csrf dipakai untuk form --}}
{{-- <form action="{{ route('admin.manajmhs.mhs.simpan') }}" id="form" method="post" enctype="multipart/form-data"> --}}


                <div class="card-body">

        {{-- <input type="hidden" name="id" value="{{ $tampil->id }}"> --}}
 <div class="form-group">
                      </div>
                      <div class="form-group">
                        <label>Siapa Nama Anda?</label>
                        <input type="text" name="nama_peserta" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->nama_peserta}}">
                      </div>


                        <label>Jelaskan Secara Singkat Tugas Anda?</label>
                        <textarea class="form-control" rows="3" name ="rincian_tugas" placeholder="Enter ..." required=""  value="{{ $tampil->rincian_tugas}}" >{{ $tampil->rincian_tugas}}</textarea>

                  <div class="row">
                  </div>

                      <div class="form-group">
                        <label>Apakah Ada Keluhan Ketika Bekerjasama Dalam Tim?</label>
                        <input type="text" name="pertanyaan1" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->pertanyaan1}}">
                      </div>

                        <div class="form-group">
                        <label>Apakah Tugas Berjalan Dengan Lancar?</label>


          @if ($tampil->pertanyaan2== 'on') 
                  <div class="form-check">
                          <input class="form-check-input" type="radio" name="pertanyaan2" checked>
                          <label class="form-check-label">Ya</label>
                        </div>
                         <div class="form-check">
                          <input class="form-check-input" type="radio" name="pertanyaan2">
                          <label class="form-check-label">Tidak</label>
                        </div>

                  @elseif($tampil->pertanyaan2 == 'off')
                  <div class="form-check">
                          <input class="form-check-input" type="radio" name="pertanyaan2" >
                          <label class="form-check-label">Ya</label>
                        </div>
                         <div class="form-check">
                          <input class="form-check-input" type="radio" name="pertanyaan2" checked>
                          <label class="form-check-label">Tidak</label>
                        </div>
                  
                  @else
                  <div class="form-check">
                          <input class="form-check-input" type="radio" name="pertanyaan2">
                          <label class="form-check-label">Ya</label>
                        </div>
                         <div class="form-check">
                          <input class="form-check-input" type="radio" name="pertanyaan2">
                          <label class="form-check-label">Tidak</label>
                        </div>
                  @endif

                        
   </div>

                      <div class="form-group">
                        <label>Berapa Jumlah Member Di Dalam Tim Yang Ideal Menurut Anda?</label>
                        <input type="number"  min="0" value="0" step="any" name="pertanyaan3" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->pertanyaan3}}">
                      </div>



                                            <div class="form-group">
                        <label>Jika Anda Memiliki Kesempatan Berpindah Tim, Tim Manakah Yang Anda Pilih?</label>
                        <select name="pertanyaan4" id="pertanyaan4_id" class="form-control select2 " >
                          @foreach($kotas as $kota)
                              <option value="{{ $kota->id }}" > {{ $kota->nama_kota}} </option>
                              @endforeach
                              {{-- value="id" > ""nama" --}}
                                </select>
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


            <!-- general form elements  -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Rincian Tugas </h3>
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
                        <label>TEAM</label>
                        <select name="kota_id" id="select_kota_id" class="form-control select2  @error('kota_id') is-invalid @enderror" >
                  <option value="{{ $tampil->kota->id }}"> {{ $tampil->kota->nama_kota}} </option>
                              @foreach($kotas as $kota)
                              <option value="{{ $kota->id }}" > {{ $kota->nama_kota}} </option>
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
                        <label>Tugas</label>
                        <select name="kecamatan_id" id="select_kecamatan_id" class="form-control select2  @error('kecamatan_id') is-invalid @enderror">
                  <option value="{{ $tampil->kecamatan->id }}"> {{ $tampil->kecamatan->nama_kecamatan}} </option>
                              @foreach($kecamatans as $kecamatan)
                              <option value="{{ $kecamatan->id }}" > {{ $kecamatan->nama_kecamatan}} </option>
                              @endforeach
                              {{-- value="id" > ""nama" --}}
                                </select>
                      </div>
                    </div>
                  </div> 

                  <div class="row">


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
            <!-- general form elements  -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Skor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Skor Pertanyaan 1</label>
                        <input type="number" min="0" max ="10" step="any"  name="skor1" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->skor1}}" readonly="" >
                      </div>
                      </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Skor Pertanyaan 2</label>
                        <input type="number" min="0" max ="10" step="any" name="skor2" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->skor2}}" readonly="" >
                      </div>
                      </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Skor Pertanyaan 3</label>
                        <input type="number" min="0" max ="10" step="any"  name="skor3" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->skor3}}" readonly="" >
                      </div>
                      </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Skor Pertanyaan 4</label>
                        <input type="number" min="0" max ="10" step="any" name="skor4" class="form-control" placeholder="Enter ..." required =""   value="{{ $tampil->skor4}}"readonly="" >
                      </div>
                    </div>
   
                   <input type="hidden" name="id" value="{{ $tampil->id}}">
                    <input type="hidden" name="peserta_id" value="{{ $tampil->id}}">

                   <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                  </div>

                
              </div>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
                          <div class="card-footer">
                  <button type="submit" class="btn btn-info" value="Simpan" onclick="return confirm('Setelah Menekan OK, Data Anda Akan Tervalidasi Dan Anda Tidak Dapat Mengubahnya Lagi, Apakah Anda Yakin?')">Validasi</button>
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