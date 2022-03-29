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
    <center><h1>RINGKASAN FORM PERTANYAAN</h1></center>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}
        <!-- Main content -->








          {{-- @if ($data->batal == '1') 
                  <input id="mybutton" type='button' value='Aktif'>
                  @elseif($data->batal == '0')
                  
                  <input id="mybutton" type='button' value='Tidak Aktif'>
                  @else

                  @endif --}}







                  
    <section class="content">
      <div class="container-fluid" >
        <div class="row">
          <!-- left column -->
          <!--/.col (left) -->
          <!-- right column -->
          <div class="overflow-auto x y">

            <!-- Form Element sizes -->
            <!-- general form elements disabled -->
            <div class="card card-warning" style="">
              <div class="card-header">
                <h3 class="card-title">Data Rincian Member Yang Menjawab</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO.</th>
                    <th>NAMA</th>
                    <th>NAMA TEAM</th>
                    <th>TUGAS</th>
                    <th>Total Skor</th>
                    <th>Tanggal Validasi</th>



                  </tr>
                  </thead>

            <tbody>
            @foreach($informasis as $index => $informasi)
              <tr>
              <td>{{ $index +1 }}</td>
              {{-- <td>{{ $informasi->tampil->id }}</td> --}}

              <td>{{ $informasi->tampil->nama_peserta }}</td>
             
              <td>{{ $informasi->tampil->kota->nama_kota }}</td>
               <td>{{ $informasi->tampil->kecamatan->nama_kecamatan }}</td>
<?php
$a = $informasi->tampil->skor1 + $informasi->tampil->skor2 + $informasi->tampil->skor3 + $informasi->tampil->skor4;
//echo $a;
?>
             
              <td><?php echo $a ?></td>
              <td>{{ $informasi->tgl_validasi }}</td>


              <td class="text-center"> 
              <form action="" method="POST">
                    <a type="button" id="edit" name="edit" class="btn btn-sm btn-success mb-1 edit" 
                       href="tampildata/rincian/{{ $informasi->tampil->id}}">Rincian</a>

                    {{-- <a href="{{ route('tampildata.destroy', ['id' => $informasi->tampil->id]) }}" class="btn btn-sm btn-danger">Delete</a> --}}
                      
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