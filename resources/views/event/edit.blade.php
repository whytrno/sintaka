@extends('layout.event')
@section('title', 'INI TITLE')
@section('content')
<div class="wrapper">
    <h1>Buat Post Baru</h1>
    
    @if (session('success'))
    <div class="alert-success">
      <p>{{ session('success') }}</p>
    </div>
    @endif
    
    @if ($errors->any())
    <div class="alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    
    <form method="POST" action="{{ route('event.update', $event->event_id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <input name="event_name" type="text" value="{{ $event->event_name }}"> 
      <input name="event_desc" type="text" value="{{ $event->event_desc }}">
      <input name="event_place" type="text" value="{{ $event->event_place }}">
      <input name="event_date_start" type="date" value="{{ $event->event_date_start}}">
      <input name="event_date_end" type="date" value="{{ $event->event_date_end}}">
      <input type="file" name="event_image" value="{{ $event->event_image }}">
      <button class="btn-blue">Submit</button>
    </form>

</div>
@endsection