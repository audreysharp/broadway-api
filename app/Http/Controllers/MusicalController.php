<?php

namespace App\Http\Controllers;

use App\Musical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class MusicalController extends Controller
{
    public function index() {
        // list something - GET /musicals
        $musicals = Musical::all();
        return Response::json($musicals);
    }

    public function create(Request $request) {
        // create new musical - POST /musicals
        // DB::table('musicals')->insert();
        Musical::create($request->all()); // create a new musical object
        return Response::json(['musical created' => true]);
    }

    public function show($id) {
        // show a single musical info - GET /musicals/$id
        $musical = Musical::find($id); // get single record back
        return Response::json($musical);
    }

    public function update(Request $request, $id) {
        // update a single musical - PUT /musicals/$id
        $musical = Musical::find($id);
        $musical->update($request->all());
        return Response::json(['musical updated' => true]);
    }

    public function destroy($id) {
        // remove a single musical -  DELETE /musicals/$id
        $musical = Musical::find($id);
        $musical->delete();
        return Response::json(['musical deleted' => true]);
    }
}
