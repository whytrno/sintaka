@extends('layout.admin')
@section('title', 'Admin | Ubah Testimoni')
@section('judul-content', 'Ubah Testimoni')
@section('content-active', 'Ubah Testimoni')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah data testimoni</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.updateUser', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input disabled type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama acara" name="name" value="{{ $user->name }}" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input disabled type="email" class="form-control" id="exampleInputPassword1" placeholder="Masukan tempat acara" name="email" value="{{ $user->email }}" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan tempat acara" name="password" value="{{ $user->password }}">
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