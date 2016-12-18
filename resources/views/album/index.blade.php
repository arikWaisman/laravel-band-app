@extends('template.master')

@section('content')
    <div class="page-wrap">

        <h1 class="text-center">
            Albums
        </h1>

        {!! Form::open(['route' => 'album.index', 'method' => 'GET', 'id' => 'albumSelect', 'name' => 'albumSelect']) !!}
            <label>View Albums By:</label>
            <select id="band" name="band">
                <option value="0">All Bands</option>
                @foreach($bands_arr as $band)
                    <option value="{{$band->id}}" {{ $selectedBand == $band->id ? 'selected' : '' }}>{{$band->name}}</option>
                @endforeach
            </select>
        {!! Form::close() !!}

        <table>
            <tr>
                <th><a href="{{ route('album.index') }}{{ app('request')->input('sort') ? '' : '?sort=true' }}">Name<i class="fa fa-caret-down" aria-hidden="true"></i></a></th>
                <th>Recorded Date</th>
                <th>Release Date</th>
                <th>Tracks</th>
                <th>Label</th>
                <th>Producer</th>
                <th>Genre</th>
            </tr>
            @foreach($albums as $album)
                <tr>
                    <td>
                        <a href="{{  route('album.show', ['id' => $album->id ]) }}">{{ $album->name }}</a>
                    </td>
                    <td>
                        {{ $album->recorded_date }}
                    </td>
                    <td>
                        {{ $album->release_date }}
                    </td>
                    <td>
                        {{ $album->tracks }}
                    </td>
                    <td>
                        {{ $album->label }}
                    </td>
                    <td>
                        {{ $album->producer }}
                    </td>
                    <td>
                        {{ $album->genre }}
                    </td>
                    <td>
                        {!! Form::open(['route' => ['album.edit', $album->id], 'method' => 'GET']) !!}
                        <button type="submit" class="btn btn-primary">Edit</button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['route' => ['album.destroy', $album->id ] , 'method' => 'DELETE']) !!}
                        <button type="submit" class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="text-center">
            {!! Form::open(['route' => 'album.create', 'method' => 'GET']) !!}
            <button type="submit" class="btn btn-success">Add New Album</button>
            {!! Form::close() !!}
            <a href="{{route('band.index')}}">go to bands</a>
        </div>
    </div>

@endsection