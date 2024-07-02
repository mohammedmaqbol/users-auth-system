<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //title 
        $title = 'All Notes';

        // Get all notes with Pagination
        $notes = Note::whereUserId(auth()->id())->paginate(5);
        return view('notes.index', compact(['notes', 'title']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //title 
        $title = 'Create Note';

        return view('notes.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
          ]); 

        // Create a new note
        $request->user()->notes()->create($validated);
        
        return redirect()->route('notes.index')->with('success', 'Note created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        // title
        $title = 'Show Note';

        // show the note
        return view('notes.show', compact(['note', 'title']));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {

        
        //title 
        $title = 'Edit Note';
        // edit page
        return view('notes.edit', compact(['note', 'title']));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //title 
        $title = 'Update Note';
        // Validate the request
        $validated = $request->validate([
            'title' => ['required','string','max:255',Rule::unique('notes')->ignore($note->id)],
            'body' => 'required|string',
          ]);

        // Update the note
        $note->update($validated);

        return redirect()->route('notes.index')->with('success', 'Note updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        // Delete the note
        $note->delete();
       
        return redirect()->route('notes.index')->with('success', 'Note deleted successfully');
    }
}
