@extends('template.master')

@section('content')
    <div class="page-wrap">
        <h1 class="text-center">Bands</h1>
        <table>
            <tr>
                <th><a href="{{ route('band.index') }}{{ app('request')->input('sort') ? '/' : '/?sort=true' }}">Name<i class="fa fa-caret-down" aria-hidden="true"></i></a></th>
                <th>Start Date</th>
                <th>Website</th>
                <th>Still Active?</th>

            </tr>
            @foreach($bands as $band)
                <tr>
                    <td>
                        <a href="{{ route('band.show', ['id' => $band->id ]) }}">{{ $band->name }}</a>
                    </td>
                    <td>
                        {{ $band->start_date }}
                    </td>
                    <td>
                        <a href="{{ $band->website }}" target="blank">{{ $band->website }}</a>
                    </td>
                    <td>
                        {{ $band->still_active == 1 ? 'yes' : 'no'  }}
                    </td>
                    <td>
                        {!! Form::open(['route' => ['band.edit', $band->id], 'method' => 'GET']) !!}
                            <button type="submit" class="btn btn-primary">Edit</button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['route' => ['band.destroy', $band->id ] , 'method' => 'DELETE']) !!}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="text-center">
            {!! Form::open(['route' => 'band.create', 'method' => 'GET']) !!}
            <button type="submit" class="btn btn-success">Add New Band</button>
            {!! Form::close() !!}
            <a href="{{route('album.index')}}">go to albums</a>
        </div>
    </div>

@endsection