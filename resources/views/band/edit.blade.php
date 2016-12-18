@extends('template.master')

@section('content')
    <div class="page-wrap">
        @include('template.error')
        <h1 class="text-center">Edit Band</h1>

        {!! Form::model( $band, ['route' => ['band.update', $band->id], 'method' => 'PUT' ]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('start_date', 'Start Date:') !!}
            {!! Form::text('start_date', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('website', 'Website:') !!}
            {!! Form::text('website', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('still_active', 'Still Active:') !!}
            {!! Form::select('still_active', ['0' => 'no', '1' => 'yes'], $band->still_active) !!}
        </div>
        <div class="text-center">
            {!! Form::submit('update', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection