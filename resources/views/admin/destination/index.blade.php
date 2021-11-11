@extends('layout.admin')
@section('title', 'Admin | Wisata')
@section('judul-content', 'Wisata')
@section('content-active', 'Wisata')
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
                  <h3 class="card-title">Data wisata</h3>
                  <a href="{{ route('admin.addDestination') }}" class="btn btn-primary float-right">Tambah data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama wisata</th>
                      <th>Tipe</th>
                      <th>Profil</th>
                      <th>Fasilitas</th>
                      <th>Harga tiket</th>
                      <th>Alamat</th>
                      <th>Thumbnail</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($destination as $data)
                      <tr>
                        <td>{{ $data->destination_name }}</td>
                        <td>{{ $data->destination_type_nama }}</td>
                        <td>
                          {{ Str::limit($data->destination_profil, 150, $end=" ...") }}
                        </td>
                        <td>{!! Str::limit($data->destination_facility, 150) !!}</td>
                        <td>{!! Str::limit($data->destination_ticket_price, 100) !!}</td>
                        <td>{{ Str::limit($data->destination_address, 100) }}</td>
                        <td><img style="width: 150px; height: 150px" src="{{ asset('storage/destinations/'.$data->destination_image) }}" alt="" /></td>
                        <td><a href="{{ route('admin.imageDestination', $data->destination_id) }}" class="btn btn-primary">Lihat Gambar</a></td>
                        <td>
                          <a href="{{ route('admin.editDestination', $data->destination_id) }}" class="btn btn-primary">Ubah</a>
                          <form action="{{ route('admin.destroyDestination', $data->destination_id) }}">
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