<?php

namespace App\Http\Controllers;

use App\Album;
use App\Band;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $bands_arr = [];
        $selectedBand = '';
        $albums = Album::all();

        foreach($albums as $album){ //using the Albums \ Band Relationship to make this array so that you can only filter albums of relevant bands. rather than having bands that dont have any albums in the system
            if( !in_array($album->band, $bands_arr) ){
                $bands_arr[] = $album->band;
            }
        }

        if( $request->query('band') && count($bands_arr) >= $request->query('band')){

            $albums = $albums->where('band_id', $request->query('band') );
            $selectedBand = $request->input('band');
        }

        if( $request->query('sort') ){
            $albums = Album::all()->sortBy('name');

        }

        return view('album.index', compact('albums', 'bands_arr', 'selectedBand'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $bands_arr = [];
        $bands = Band::all();
        foreach($bands as $band){
            if( !in_array($band, $bands_arr) ){
                $bands_arr[$band->id] = $band->name;
            }
        }

        return view('album.create', compact('bands_arr'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name'      => 'required',
            'band_id'   => 'required'
        ]);

        $album = Album::create($request->all());

        return redirect()->route('album.show', ['id' => $album->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $album = Album::findOrFail($id);

        return view('album.show', compact('album'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $bands_arr = [];
        $bands = Band::all();
        foreach($bands as $band){
            if( !in_array($band, $bands_arr) ){
                $bands_arr[$band->id] = $band->name;
            }
        }

        $album = Album::where('id', $id)->firstOrFail();

        return view('album.edit', compact('album', 'bands_arr', 'album_id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name'      => 'required',
            'band_id'   => 'required'
        ]);

        $album = Album::where('id', $id)->firstOrFail();
        $album->update( $request->all() );

        return redirect()->route('album.show', ['id' => $id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Album::findOrFail($id)->delete();

        return redirect()->back();

    }
}
