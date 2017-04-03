<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class SongController extends Controller
{
    public function index() {
        // list something - GET /songs
        $songs = Song::all();
        return Response::json($songs);
    }

    public function create(Request $request) {
        // create new song - POST /songs
        // DB::table('songs')->insert();
        Song::create($request->all()); // create a new song object
        return Response::json(['song created' => true]);
    }

    public function show($id) {
        // show a single song info - GET /songs/$id
        $song = Song::find($id); // get single record back
        return Response::json($song);
    }

    public function update(Request $request, $id) {
        // update a single song - PUT /songs/$id
        $song = Song::find($id);
        $song->update($request->all());
        return Response::json(['song updated' => true]);
    }

    public function destroy($id) {
        // remove a single song -  DELETE /songs/$id
        $song = Song::find($id);
        $song->delete();
        return Response::json(['song deleted' => true]);
    }
}
