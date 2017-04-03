<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ActorController extends Controller
{
    public function index() {
        // list something - GET /actors
        $actors = Actor::all();
        return Response::json($actors);
    }

    public function create(Request $request) {
        // create new actor - POST /actors
        // DB::table('actors')->insert();
        Actor::create($request->all()); // create a new actor object
        return Response::json(['created' => true]);
    }

    public function show($id) {
        // show a single actor info - GET /actors/$id
        $actor = Actor::find($id); // get single record back
        return Response::json($actor);
    }

    public function update(Request $request, $id) {
        // update a single actor - PUT /actors/$id
        $actor = Actor::find($id);
        $actor->update($request->all());
        return Response::json(['updated' => true]);
    }

    public function destroy($id) {
        // remove a single actor -  DELETE /actors/$id
        $actor = Actor::find($id);
        $actor->delete();
        return Response::json(['deleted' => true]);
    }
}
