@extends('layout.admin')
@section('title', 'Admin | Pengaturan')
@section('judul-content', 'Pengaturan')
@section('content-active', 'Pengaturan')
@section('content')
<section class="content">
    <div class="container-fluid">
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
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid"
                     src="{{ asset('storage/settings/logo.jpg') }}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">Ubah Logo</h3>

              <form action="{{ route('admin.changeLogo') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input name="logo" type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <button type="submit" class="input-group-text">Ubah</button>
                  </div>
                </div>
              </form>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <a href="{{ route('admin.infos') }}">
                    <b>Informasi</b> <a class="float-right">{{ $count_information }}</a>
                  </a>  
                </li>
                <li class="list-group-item">
                  <a href="{{ route('admin.events') }}">
                    <b>Acara</b> <a class="float-right">{{ $count_event }}</a>
                  </a>  
                </li>
                <li class="list-group-item">
                  <a href="{{ route('admin.destinations') }}">
                    <b>Wisata</b> <a class="float-right">{{ $count_destination }}</a>
                  </a>  
                </li>
                <li class="list-group-item">
                  <a href="{{ route('admin.services') }}">
                    <b>Service</b> <a class="float-right">{{ $count_service }}</a>
                  </a>  
                </li>
                <li class="list-group-item">
                  <a href="{{ route('admin.videos') }}">
                    <b>Video</b> <a class="float-right">{{ $count_video }}</a>
                  </a>  
                </li>
                <li class="list-group-item">
                  <a href="{{ route('admin.testimonis') }}">
                   <b>Testimoni</b> <a class="float-right">{{ $count_testimoni }}</a>
                  </a>  
                </li>
                <li class="list-group-item">
                  <a href="{{ route('admin.arts') }}">
                    <b>Kesenian</b> <a class="float-right">{{ $count_art }}</a>
                  </a>  
                </li>
                <li class="list-group-item">
                  <a href="{{ route('admin.users') }}">
                   <b>Pengguna</b> <a class="float-right">{{ $count_user }}</a>
                  </a>    
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tentang</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Nama website</strong>

              <p class="text-muted">
                {{ $setting_get->name }}
              </p>

              <hr>

              <strong><i class="fas fa-book mr-1"></i> Deskripsi website</strong>

              <p class="text-muted">
                {{ $setting_get->description }}
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>

              <p class="text-muted">
                {{ $setting_get->address }}</p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> No Hp</strong>

              <p class="text-muted">
                {{ $setting_get->no_hp }}
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Email</strong>

              <p class="text-muted">
                {{ $setting_get->email }}</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Slider</a></li>
                <li class="nav-item"><a class="nav-link" href="#about" data-toggle="tab">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="card-body">
                    <a href="{{ route('admin.addSlider') }}" class="btn btn-primary float-right">Tambah data</a>
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                      @forelse ($slider as $data)
                        <tr>
                          <td>{{ $data->slider_title }}</td>
                          <td>{{ $data->slider_desc }}</td>
                          <td><img style="width: 300px; height: 150px" src="{{ asset('storage/sliders/'.$data->slider_img) }}" alt="" /></td>
                          <td>
                            <a href="{{ route('admin.editSlider', $data->slider_id) }}" class="btn btn-primary">Ubah</a>
                            <form action="{{ route('admin.destroySlider', $data->slider_id) }}">
                              @csrf
                              @method('Delete')
                              <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                          </td>
                        </tr>
                      @empty
                        
                      @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="about">
                  <form class="form-horizontal" method="post" action="{{ route('admin.updateAbout', $about->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="title" value="{{ $about->title }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">Sub judul</label>
                      <div class="col-sm-10">
                        <textarea name="sub_title" class="form-control" id="inputExperience" placeholder="Experience">{{ $about->sub_title }}</textarea>
                      </div>
                    </div>
                    {{-- <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea name="desc" class="form-control" id="inputExperience" placeholder="Experience">{{ $about->desc }}</textarea>
                      </div>
                    </div> --}}
                    <div class="card card-outline card-info">
                      <!-- /.card-header -->
                      <div class="card-header">
                          <h3 class="card-title">
                          Deskripsi
                          </h3>
                      </div>
                      <div class="card-body">
                        <textarea id="summernote" name="desc">
                          {{ $about->desc }}
                        </textarea>
                      </div>
                      <div class="card-footer">
                        Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Gambar  </label>
                      <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="settings">
                  <form class="form-horizontal" method="post" action="{{ route('admin.updateSetting', $setting_get->setting_id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{ $setting_get->name }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                      <div class="col-sm-10">
                        <textarea name="description" class="form-control" id="inputExperience" placeholder="Experience">{{ $setting_get->description }}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Lokasi  </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="address" value="{{ $setting_get->address }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">No Hp</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Name" name="no_hp" value="{{ $setting_get->no_hp }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputSkills" placeholder="Skills" name="email" value="{{ $setting_get->email }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-2 col-form-label">Map url</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills" name="address_url" value="{{ $setting_get->address_url }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Anggota</h3>
              <a href="{{ route('admin.addTeam') }}" class="btn btn-primary float-right">Tambah data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Isi</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($team as $data)
                  <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->role }}</td>
                    <td><img style="width: 170px; height: 200px" src="{{ asset('storage/teams/'.$data->image) }}" alt="" /></td>
                    <td>
                      <a href="{{ route('admin.editTeam', $data->id) }}" class="btn btn-primary">Ubah</a>
                      <form action="{{ route('admin.destroyTeam', $data->id) }}">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
                @empty
                  
                @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  @endsection