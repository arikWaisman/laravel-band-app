@extends('template.master')

@section('content')
    <div class="page-wrap">
        @include('template.error')
        <h1 class="text-center">Create New Album</h1>
        {!! Form::open(['route' => 'album.store', 'method' => 'POST' ]) !!}

            <div class="form-group">
            {!! Form::label('name', 'Album Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('recorded_date', 'Recorded Date:') !!}
                {!! Form::text('recorded_date', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('release_date', 'Release Date:') !!}
                {!! Form::text('release_date', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('number_of_tracks', ' Number of Tracks:') !!}
                {!! Form::text('number_of_tracks', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('label', 'Label:') !!}
                {!! Form::text('label', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('producer', 'Producer:') !!}
                {!! Form::text('producer', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('genre', 'Genre:') !!}
                {!! Form::text('genre', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('band_id', 'band:') !!}
                {!! Form::select('band_id', $bands_arr, null, ['placeholder' => 'Select A Band']) !!}
            </div>
            <div class="text-center">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection