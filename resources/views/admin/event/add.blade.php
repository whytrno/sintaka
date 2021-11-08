@extends('layout.admin')
@section('title', 'Admin | Tambah Acara')
@section('judul-content', 'Tambah Acara')
@section('content-active', 'Tambah Acara')
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
            <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama acara</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama acara" name="event_name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan tempat acara" name="event_place">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal mulai - akhir</label>
                  <div class="row">
                      <div class="col-md-5">
                        <input type="date" class="form-control" id="exampleInputEmail1" name="event_date_start">
                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-5">
                        <input type="date" class="form-control" id="exampleInputEmail1" name="event_date_end">
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="event_image">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h3 class="card-title">
                        Deskripsi Acara
                        </h3>
                    </div>
                    <div class="card-body">
                      <textarea id="summernote" name="event_desc">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                      </textarea>
                    </div>
                    <div class="card-footer">
                      Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
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