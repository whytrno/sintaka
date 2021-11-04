@extends('layout.admin')
@section('title', 'Admin | Gambar Wisata')
@section('judul-content', 'Gambar Wisata')
@section('content-active', 'Gambar Wisata')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data gambar wisata {{ $destination->destination_name }}</h3>
              <a href="{{ route('admin.addDestinationImage', $destination->destination_id) }}" class="btn btn-primary float-right">Tambah data</a>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($image as $data)
                  <tr>
                    <td><img style="width: 150px; height: 150px" src="{{ Storage::url('public/destinations/').$data->destination_image }}" alt="" /></td>
                    <td>
                      <form action="{{ route('admin.destroyDestinationImage', $data->destination_image_id) }}">
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