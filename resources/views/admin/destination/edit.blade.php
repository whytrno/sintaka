@extends('layout.admin')
@section('title', 'Admin | Ubah Wisata')
@section('judul-content', 'Ubah Wisata')
@section('content-active', 'Ubah Wisata')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <pre>
            @forelse ($destination_get as $get)
              {{ $get->destination_type_nama }}
            @empty
              
            @endforelse
          </pre>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah data wisata</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('destination.update', $destination->destination_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama wisata</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $destination->destination_name }}" name="destination_name">
                </div>
                <select class="form-control" name="destination_type_id">
                  @forelse ($destination_get as $get)
                    <option value="{{ $destination->destination_type_id }}" selected>{{ $get->destination_type_nama }}</option>
                  @empty
                    <option value="1">Kosong</option>
                  @endforelse
                  @forelse ($destinationtype as $type)
                    <option value="{{ $type->destination_type_id }}">{{ $type->destination_type_nama }}</option>
                  @empty
                    <option value="1">Kosong</option>
                  @endforelse

                </select>
                <div class="form-group">
                  <label for="exampleInputPassword1">Profil</label>
                  <textarea name="destination_profil" class="form-control">{{ $destination->destination_profil }}</textarea>
                </div>
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">
                        Fasilitas
                        </h3>
                    </div>
                    <div class="card-body">
                      <textarea id="summernote" name="destination_facility">
                        {{ $destination->destination_facility }}
                      </textarea>
                    </div>
                </div>
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">
                        Harga tiket
                        </h3>
                    </div>
                    <div class="card-body">
                      <textarea id="summernote1" name="destination_ticket_price">
                        {{ $destination->destination_ticket_price }}
                      </textarea>
                    </div>
                </div>
              <!-- /.card-body -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $destination->destination_address }}" name="destination_address">
                </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

  @endsection