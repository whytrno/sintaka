@extends('layout.admin')
@section('title', 'Admin | Tambah Layanan')
@section('judul-content', 'Tambah Layanan')
@section('content-active', 'Tambah Layanan')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah data layanan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.storeService') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan judul layanan" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Isi</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan isi layanan" name="content">
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