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
            <form action="{{ route('event.update', $event->event_id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama acara</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan nama acara" name="event_name" value="{{ $event->event_name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan tempat acara" name="event_place" value="{{ $event->event_place }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal mulai - akhir</label>
                  <div class="row">
                      <div class="col-md-5">
                        <input type="date" class="form-control" id="exampleInputEmail1" name="event_date_start"  value="{{ $event->event_date_start }}">
                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-5">
                        <input type="date" class="form-control" id="exampleInputEmail1" name="event_date_end" value="{{ $event->event_date_end }}">
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Pilih gambar <b>(370x215)</b></label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="event_image">
                      <label class="custom-file-label" for="exampleInputFile">Pilih gambar</label>
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
                        {{ $event->event_desc }}"
                      </textarea>
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