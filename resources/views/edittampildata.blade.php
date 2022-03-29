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
    <center><h1>Rincian Hasil Tugas</h1></center>
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
                <h3 class="card-title">Survey</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                      <form action="{{ route('tampildata.update') }}" id="form" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- csrf dipakai untuk form --}}
{{-- <form action="{{ route('admin.manajmhs.mhs.simpan') }}" id="form" method="post" enctype="multipart/form-data"> --}}







          {{-- @if ($data->batal == '1') 
                  <input id="mybutton" type='button' value='Aktif'>
                  @elseif($data->batal == '0')
                  
                  <input id="mybutton" type='button' value='Tidak Aktif'>
                  @else

                  @endif --}}

                <div class="card-body">

        <input type="hidden" name="id" value="{{ $tampil->id }}">
        {{-- <input type="hidden" name="id" value="{{ $tampil->id }}"> --}}
 <div class="form-group">
                      </div>
                      <div class="form-group">
                        <label>Siapa Nama Anda?</label>
                        <input type="text" name="nama_peserta" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->nama_peserta}}" readonly>
                      </div>


                        <label>Jelaskan Secara Singkat Tugas Anda?</label>
                        <textarea class="form-control" rows="3" name ="rincian_tugas" placeholder="Enter ..." required=""  value="{{ $tampil->rincian_tugas}}" readonly>{{ $tampil->rincian_tugas}}</textarea>

                  <div class="row">
                  </div>

                      <div class="form-group">
                        <label>Apakah Ada Keluhan Ketika Bekerjasama Dalam Tim?</label>
                        <input type="text" name="pertanyaan1" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->pertanyaan1}}" readonly>
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
                        <input type="number"  min="0" value="0" step="any" name="pertanyaan3" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->pertanyaan3}}" readonly="">
                      </div>



                                            <div class="form-group">
                        <label>Jika Anda Memiliki Kesempatan Berpindah Tim, Tim Manakah Yang Anda Pilih?</label>
                        <select name="pertanyaan4" id="pertanyaan4_id" class="form-control select2 " disabled="">
                          @foreach($kotas as $kota)
                              <option value="{{ $kota->id }}" > {{ $kota->nama_kota}} </option>
                              @endforeach
                              {{-- value="id" > ""nama" --}}
                                </select>
                      </div>
                </div>
                <!-- /.card-body -->


              
            </div>
            <!-- /.card -->

            <!-- general form elements -->

            <!-- /.card -->

            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->


            <!-- general form elements disabled -->
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
                        <select name="kota_id" id="select_kota_id" class="form-control select2  @error('kota_id') is-invalid @enderror" disabled="">
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
                        <select name="kecamatan_id" id="select_kecamatan_id" class="form-control select2  @error('kecamatan_id') is-invalid @enderror" disabled="">
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
            <!-- general form elements disabled -->
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
                        <input type="number" min="0" max ="10" step="any" name="skor1" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->skor1}}" >
                      </div>
                      </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Skor Pertanyaan 2</label>
                        <input type="number" min="0" max ="10" step="any" name="skor2" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->skor2}}" >
                      </div>
                      </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Skor Pertanyaan 3</label>
                        <input type="number" min="0" max ="10" step="any" name="skor3" class="form-control" placeholder="Enter ..." required=""  value="{{ $tampil->skor3}}" >
                      </div>
                      </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Skor Pertanyaan 4</label>
                        <input type="number" min="0" max ="10" step="any" name="skor4" class="form-control" placeholder="Enter ..." required =""   value="{{ $tampil->skor4}}" >
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
                  <button type="submit" class="btn btn-info" value="Simpan" >Beri Nilai Dan Simpan</button>
                </div>
                </form>

<form action="{{ route('tampildata.diterima') }}" id="form" method="post" enctype="multipart/form-data">
                        @csrf
                         <input type="hidden" name="id" value="{{ $tampil->id }}">

                          <input type="hidden" name="email" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $tampil->email}}" >
                           <input type="hidden" name="status" class="form-control" placeholder="Enter ..." required="" readonly value="wawancara" >
                            <input type="hidden" name="validasi_umur" class="form-control" placeholder="Enter ..." required="" readonly value="CUKUP" >
                             <input type="hidden" name="validasi_nik" class="form-control" placeholder="Enter ..." required="" readonly value="VALID" >
                              <input type="hidden" name="validasi_akta" class="form-control" placeholder="Enter ..." required="" readonly value="VALID" >

                    {{-- <a type="button" id="edit" name="edit" class="btn btn-sm btn-success" 
                       href="diterima/{{ $tampil->id}}">Terima</a> --}}

                  <div class="card-footer">
                  <button type="submit" class="btn btn-info" value="Simpan" >Terima</button>
                </div>
</form>

   <div class="card-footer">
              <form action="" method="POST">
                    <a type="button" id="edit" name="edit" class="btn btn-danger mb-1 edit" 
                       href="/tampildata/rincianTolak/{{$tampil->id}}">Tolak</a>

                    {{-- <a href="{{ route('tampildata.destroy', ['id' => $informasi->tampil->id]) }}" class="btn btn-sm btn-danger">Delete</a> --}}
                      
              </form> 
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