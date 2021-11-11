@extends('layout.admin')
@section('title', 'Admin | Ubah Informasi')
@section('judul-content', 'Ubah Informasi')
@section('content-active', 'Ubah Informasi')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah data Informasi</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.updateInfo', $info->info_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul informasi</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama acara" name="info_title" value="{{ $info->info_title }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi informasi</label>
                  <textarea id="summernote" name="info_desc" class="form-control">
                    {{ $info->info_desc }}
                  </textarea>
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