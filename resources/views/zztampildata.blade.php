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
    <center><h1>Data Pendaftar PPDB</h1></center>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid" >
        <div class="row">
          <!-- left column -->
          <!--/.col (left) -->
          <!-- right column -->
          <div class="overflow-auto x y">

            <!-- Form Element sizes -->
            <!-- general form elements disabled -->
            <div class="card card-warning" style="width: 250%; height: 100%">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO.</th>
                    <th>NAMA</th>
                    <th>NIK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Umur</th>
                    <th>Agama</th>
                    <th>Warga Negara</th>
                    <th>Jenis Kelamin</th>
                    <th>Hobi</th>
                    <th>Cita-cita</th>
                    <th>Jumlah Saudara</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Kota</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Diedit Tanggal</th>


                  </tr>
                  </thead>

            <tbody>
            @foreach($tampils as $index => $tampil)
              <tr>
              <td>{{ $index +1 }}</td>
              <td>{{ $tampil->id }}</td>

              <td>{{ $tampil->nama_peserta }}</td>

              <td>{{ $tampil->nik }}</td>
              <td>{{ $tampil->tempat_lahir }}</td>
              <td>{{ $tampil->tanggal_lahir }}</td>
              <?php $a = $tampil->tanggal_lahir;

    $a = $tampil->tanggal_lahir;  
$bday = new DateTime($a); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
//printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
//printf("\n");

              ?>

              <td><?php printf(' %d Tahun, %d Bulan, %d Hari', $diff->y, $diff->m, $diff->d); ?></td>
              <td>{{ $tampil->agama->nama_agama }}</td>

              <td>{{ $tampil->warga_negara }}</td>
              <td>{{ $tampil->jenis_kelamin }}</td>
              <td>{{ $tampil->hobi }}</td>
              <td>{{ $tampil->cita_cita }}</td>
              <td>{{ $tampil->jumlah_saudara }}</td>
              <td>{{ $tampil->alamat }}</td>
              <td>{{ $tampil->email }}</td>
              <td>{{ $tampil->nomor_hp }}</td>
              <td>{{ $tampil->nama_ayah }}</td>
              <td>{{ $tampil->nama_ibu }}</td>

              <td>{{ $tampil->kota->nama_kota }}</td>
              <td>{{ $tampil->kecamatan->nama_kecamatan }}</td>
              <td>{{ $tampil->kelurahan->nama_kelurahan }}</td>
              <td>{{ $tampil->created_at }}</td>
              <td>{{ $tampil->updated_at }}</td>
              <td class="text-center"> 
              <form action="" method="POST">
                    <a type="button" id="edit" name="edit" class="btn btn-sm btn-success mb-1 edit" 
                       href="tampildata/rincian/{{ $tampil->id}}">Rincian</a>

                    <a href="{{ route('tampildata.destroy', ['id' => $tampil->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                      
              </form> 


{{--                <td class="text-center"> 
              <form action="" method="POST">
                  <input type="hidden" name="nama_pc" value="">
                  <input type="hidden" name="id_info" value="">      
                  <a id='edit_info' class="edit_info" data-toggle='modal' data-target="#editInfo" data-id="">
                   <button type="button" class="btn btn-warning" name=""><i class="fa fa-pencil"></i> Edit</button></a>                                                                                           
                    <!Reset Password>                     
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Mereset ?')"> <i class="fa fa-trash"></i> Hapus</button>
              </form>   
              </td>   --}}                                      

              </tr>
            @endforeach
          </tbody>

                </table>
              </div>

              <!-- /.card-body -->
            </div>
              <!-- /.card-body -->

            <!-- /.card -->
            <!-- general form elements disabled -->


            <!-- /.card -->
          </div>

          <!--/.col (right) -->
        </div>
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