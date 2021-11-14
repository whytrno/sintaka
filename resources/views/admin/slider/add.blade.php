@extends('layout.admin')
@section('title', 'Admin | Tambah Slider')
@section('judul-content', 'Tambah Slider')
@section('content-active', 'Tambah Slider')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah data acara</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.storeSlider') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Slider</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama acara" name="slider_title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi Slider</label>
                  <textarea name="slider_desc" class="form-control" placeholder="Masukan deskripsi"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Pilih gambar <b>(1920x782)</b></label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="slider_img">
                      <label class="custom-file-label" for="exampleInputFile">Pilih gambar</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
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