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
            <form action="{{ route('admin.storeDestinationImage') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama wisata</label>
                  <input readonly hidden type="text" class="form-control" id="exampleInputEmail1" value="{{ $destination->destination_id }}" name="destination_id">
                  <input readonly type="text" class="form-control" id="exampleInputEmail1" value="{{ $destination->destination_name }}">
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="file[]" accept="image/*" multiple="multiple" class="custom-file-input" id="exampleInputFile">
                      
                      <label class="custom-file-label" for="exampleInputFile">Pilih gambar <b>(840x360)</b></label>
                    </div>
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                  </div>
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