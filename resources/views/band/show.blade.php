@extends('template.master')

@section('content')

    <div class="page-wrap">
        <div class="form-group h3">
            <span>Name:</span> <span>{{$band->name}}</span>
        </div>
        <div class="form-group h3">
            <span>Start Date:</span> <span>{{$band->start_date}}</span>
        </div>
        <div class="form-group h3">
            <span>Website:</span><a href="{{ $band->website }}" target="blank">{{ $band->website }}</a>
        </div>
        <div class="form-group h3">
            <span>Still Active:</span> <span>{{ $band->still_active == 1 ? 'yes' : 'no'  }}</span>
        </div>
        <div class="form-group h3">
            <span>Albums:</span>
            <ul>
                @foreach($band->albums as $album)
                    <li>{{$album->name}}</li>
                @endforeach
            </ul>
        </div>
        <div class="form-group">
            {!! Form::open(['route' => ['band.edit', $band->id], 'method' => 'GET']) !!}
            <button type="submit" class="btn btn-primary">Edit Band</button>
            {!! Form::close() !!}
            <a href="{{route('album.index')}}">go to albums</a> /
            <a href="{{route('band.index')}}">go to bands</a>
        </div>
    </div>


@endsection