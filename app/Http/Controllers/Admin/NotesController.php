<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notes;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Notes::where('user_id', Auth::user()->id)->get();
        $notes = $notes->map(function ($note) {
            $note->notes = Str::words(strip_tags($note->notes), 8, '...');
            return $note;
        });
        return view('app.notes-view', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = null;
        return view('app.notes-form', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $notes = $request->validate([
            'title' => 'required',
            'notes' => 'nullable',
        ]);
        $notes['user_id'] = Auth::user()->id;
        Notes::create($notes);
        return \to_route('notes.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Notes::where('id', $id)->first();
        return view('app.notes-form', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);
        $note = Notes::findOrFail($id);
        // Update the note with the validated data
        $note->update($validatedData);
        return \to_route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Notes::where('id',$id)->first();
        $delete->delete();
        return \to_route('notes.index');
    }
}
