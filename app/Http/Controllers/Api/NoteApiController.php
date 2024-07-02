<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Note; 

class NoteApiController extends Controller
{
    public function index()
    {
    
        $notes = auth()->user()->notes;
        return response()->json($notes);
    }

    public function store(Request $request)
    {
        $note = auth()->user()->notes()->create($request->all());
        return response()->json($note, 201);
    }

    public function show(Note $note)
    {
        

        return response()->json($note);
    }

    public function update(Request $request, Note $note)
    {
        

        $note->update($request->all());
        return response()->json($note);
    }

    public function destroy(Note $note)
    {

        $note->delete();
        return response()->json(null, 204);
    }
}
