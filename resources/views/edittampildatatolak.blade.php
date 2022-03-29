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
    <h1>FORM AGAMA</h1>
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
              <form action="{{ route('tampildata.ditolak') }}" id="form" method="post" enctype="multipart/form-data">
                  @csrf
                        {{-- csrf dipakai untuk form --}}
                          <input type="hidden" name="id" value="{{ $informasi->tampil->id }}">

                          <input type="hidden" name="email" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $informasi->tampil->email}}" >
                           <input type="hidden" name="status" class="form-control" placeholder="Enter ..." required="" readonly value="ditolak" >

                  <input type="hidden" name="email" class="form-control" placeholder="Enter ..." required="" readonly value="{{ $informasi->tampil->email}}" >

                <div class="card-body">
                      <div class="form-group">



                  <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Apakah Umur Mencukupi?</label>
                        <select class="custom-select" name="validasi_umur">
                          <option>CUKUP</option>
                          <option>TIDAK CUKUP</option>
                        </select>
                      </div>
                    </div>
                  </div>



                                    <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Apakah Data Induk Keluarga (NIK) Valid?</label>
                        <select class="custom-select" name="validasi_nik">
                          <option>VALID</option>
                          <option>TIDAK VALID</option>
                        </select>
                      </div>
                    </div>
                  </div>


                <div class="row">
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Apakah Data Akta Kelahiran Valid?</label>
                        <select class="custom-select" name="validasi_akta">
                          <option>VALID</option>
                          <option>TIDAK VALID</option>
                        </select>
                      </div>
                    </div>
                  </div>






                      
                      </div>

                </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-danger" value="Simpan" onclick="return confirm('Setelah Menekan OK, Pendaftar Ini Akan Ditolak, Apakah Anda Yakin?')" >Tolak Pendaftar</button>
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
                <h3 class="card-title">DATA PENDAFTAR</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Tanggal Daftar</th>

                  </tr>
                  </thead>
            <tbody>
              <tr>
              <td>{{ $informasi->tampil->nama_peserta }}</td>

              <?php $a = $informasi->tampil->tanggal_lahir;

    $a = $informasi->tampil->tanggal_lahir;  
$bday = new DateTime($a); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
//printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
//printf("\n");

              ?>

              <td><?php printf(' %d Tahun, %d Bulan, %d Hari', $diff->y, $diff->m, $diff->d); ?></td>
              <td>{{ $informasi->tgl_validasi }}</td>
 
              </tr>
          {{--   @foreach($agamas as $p)
            <tr>
              <td>{{ $p->id_agama }}</td>
              <td>{{ $p->nama_agama }}</td>
            </tr>
            @endforeach --}}
          </tbody>

                </table>
                <br>
                <br>
                <br>
                                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>
                    <th>NIK</th>
                    <th>Akta Kelahiran</th>

                  </tr>
                  </thead>
            <tbody>
              <tr>
               <td>{{ $informasi->tampil->nik }}</td>
 <td>{{ $informasi->tampil->akta }}</td>

 
              </tr>
          {{--   @foreach($agamas as $p)
            <tr>
              <td>{{ $p->id_agama }}</td>
              <td>{{ $p->nama_agama }}</td>
            </tr>
            @endforeach --}}
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