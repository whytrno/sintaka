@extends('layout.admin')
@section('title', 'Admin | Acara')
@section('judul-content', 'Acara')
@section('content-active', 'Acara')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
  
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data acara</h3>
                  <a href="{{ route('admin.addEvent') }}" class="btn btn-primary">Tambah data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama acara</th>
                      <th>Deskripsi</th>
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
                        <td>
                          {!! Str::limit($data->event_desc, 150, $end=" ...") !!}
                        </td>
                        <td>{{ $data->event_place }}</td>
                        <td>{{ $data->event_date_start}} - {{ $data->event_date_end }}</td>
                        <td>{{ $data->event_image}}</td>
                        <td>
                          <a href="#" class="btn btn-primary">Ubah</a>
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
                    <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </tfoot>
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