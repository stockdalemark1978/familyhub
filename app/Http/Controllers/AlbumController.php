<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Album;
use Session;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $albums = Album::with('Photos')->get();
        
        return view('albums.index')->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
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
            'name' => 'required',
            'cover_image' => 'image|max:1999'
        ]);

        // Get the name of the file uploaded
        $filename = $request->file('cover_image')->getClientOriginalName();

        //create a random number
        $randomNum = rand();

        //attach random number to file name to make sure unique
        $newFilename = $randomNum.$filename;

        $path = $request->file('cover_image')->storeAs('public/album_covers', $newFilename);

        //create a new album
        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $newFilename;

        $album->save();

        return redirect('/albums')->with('success', 'Album Created');       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album_id = $id;
        $album = Album::with('Photos')->find($id);
        return view('albums.show', compact('album_id'))->with('album', $album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //this currently doesn't work...need to figure out
    //     $album = Album::find($id);
    //     if(Storage::delete('album_covers/'.$album->album)){
    //         $album->delete();

    // return redirect('/albums')->with('success', 'Album Deleted');
    //  }
    }
}