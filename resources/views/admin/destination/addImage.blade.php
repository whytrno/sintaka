@extends('layout.admin')
@section('title', 'Admin | Tambah Gambar Wisata')
@section('judul-content', 'Tambah Gambar Wisata')
@section('content-active', 'Tambah Gambar Wisata')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah gambar wisata</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.storeDestinationImage') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama wisata</label>
                  <input readonly hidden type="text" class="form-control" id="exampleInputEmail1" value="{{ $destination->destination_id }}" name="destination_id">
                  <input readonly type="text" class="form-control" id="exampleInputEmail1" value="{{ $destination->destination_name }}">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="destination_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
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