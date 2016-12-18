@extends('template.master')

@section('content')

    <div class="page-wrap">
        <div class="form-group h3">
            <span>Band Name:</span> <span>{{$album->band->name}}</span>
        </div>
        <div class="form-group h3">
            <span>Album Name:</span> <span>{{$album->name}}</span>
        </div>
        <div class="form-group h3">
            <span>Recorded Date:</span> <span>{{$album->recorded_date}}</span>
        </div>
        <div class="form-group h3">
            <span>Release Date:</span> <span>{{ $album->release_date }}</span>
        </div>
        <div class="form-group h3">
            <span>Tracks:</span> <span>{{ $album->number_of_tracks }}</span>
        </div>
        <div class="form-group h3">
            <span>Label:</span> <span>{{ $album->label }}</span>
        </div>
        <div class="form-group h3">
            <span>Producer:</span> <span>{{ $album->producer }}</span>
        </div>
        <div class="form-group h3">
            <span>Producer:</span> <span>{{ $album->genre }}</span>
        </div>
        <div class="form-group">
            {!! Form::open(['route' => ['album.edit', $album->id], 'method' => 'GET']) !!}
            <button type="submit" class="btn btn-primary">Edit Album</button>
            {!! Form::close() !!}
            <a href="{{route('album.index')}}">go to albums</a> /
            <a href="{{route('band.index')}}">go to bands</a>

        </div>
    </div>


@endsection