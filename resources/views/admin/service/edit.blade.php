@extends('layout.admin')
@section('title', 'Admin | Ubah Service')
@section('judul-content', 'Ubah Service')
@section('content-active', 'Ubah Service')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah data service</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.updateService', $service->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama acara" name="title" value="{{ $service->title }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Isi</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan tempat acara" name="content" value="{{ $service->content }}">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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