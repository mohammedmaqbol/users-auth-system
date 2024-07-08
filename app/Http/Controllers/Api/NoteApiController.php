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
        if (auth()->id() !== $note->user_id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        return response()->json($note);
    }

    public function update(Request $request, Note $note)
    {
        if (auth()->id() !== $note->user_id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $note->update($request->all());
        return response()->json($note);
    }

    public function destroy(Note $note)
    {
        if (auth()->id() !== $note->user_id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $note->delete();
        return response()->json(null, 204);
    }
}
