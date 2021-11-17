@extends('layout.admin')
@section('title', 'Admin | Ubah Admin')
@section('judul-content', 'Ubah Admin')
@section('content-active', 'Ubah Admin')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah data admin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.updateUser', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input disabled type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $user->name }}" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input disabled type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{ $user->email }}" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="{{ $user->password }}">
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