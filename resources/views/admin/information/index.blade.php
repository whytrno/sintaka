@extends('layout.admin')
@section('title', 'Admin | Informasi')
@section('judul-content', 'Informasi')
@section('content-active', 'Informasi')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
              <strong>{{ $message }}</strong>
            </div>
          @endif
          @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
              <strong>{{ $message }}</strong>
            </div>
          @endif
          <div class="row">
            <div class="col-12">
  
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data informasi</h3>
                  <a href="{{ route('admin.addInfo') }}" class="btn btn-primary float-right">Tambah data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($info as $data)
                      <tr>
                        <td>{{ $data->info_title }}</td>
                        <td>{{ $data->info_desc }}</td>
                        <td>
                          <a href="{{ route('admin.editInfo', $data->info_id) }}" class="btn btn-primary">Ubah</a>
                          <form action="{{ route('admin.destroyInfo', $data->info_id) }}">
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                    @empty
                      
                    @endforelse
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
@endsection