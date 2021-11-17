@extends('layout.admin')
@section('title', 'Admin | Acara')
@section('judul-content', 'Acara')
@section('content-active', 'Acara')
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
                  <h3 class="card-title">Data acara</h3>
                  <a href="{{ route('admin.addEvent') }}" class="btn btn-primary float-right">Tambah data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama acara</th>
                      <th>Tempat</th>
                      <th>Tanggal mulai - akhir</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($event as $data)
                      <tr>
                        <td>{{ $data->event_name }}</td>
                        <td>{{ $data->event_place }}</td>
                        <td>{{ $data->event_date_start}} - {{ $data->event_date_end }}</td>
                        <td><img style="width: 150px; height: 150px" src="{{ asset('storage/events/'.$data->event_image) }}" alt="" /></td>
                        <td>
                          <a href="{{ route('admin.editEvent', $data->event_id) }}" class="btn btn-primary">Ubah</a>
                          <form action="{{ route('admin.destroyEvent', $data->event_id) }}">
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