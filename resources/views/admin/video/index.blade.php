@extends('layout.admin')
@section('title', 'Admin | Video')
@section('judul-content', 'Video')
@section('content-active', 'Video')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
  
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Video</h3>
                  <a href="{{ route('admin.addEvent') }}" class="btn btn-primary float-right">Tambah data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Link video</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($video as $data)
                      <tr>
                        <td>{{ $data->video_url }}</td>
                        <td>
                          <form action="{{ route('admin.destroyEvent', $data->video_id) }}">
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