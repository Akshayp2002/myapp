<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notes;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Notes::where('user_id', Auth::user()->id);
        $latestNote = $notes->latest()->first(); // Get the latest note

        if ($latestNote) {
            $now = Carbon::now();
            $createdAt = Carbon::parse($latestNote->created_at);

            if ($createdAt->isToday()) {
                $daysAgoText = 'Today';
            } elseif ($createdAt->isYesterday()) {
                $daysAgoText = 'Yesterday';
            } else {
                $daysAgo = $createdAt->diffInDays($now);
                $daysAgoText = $daysAgo . ' days ago';
            }
        } else {
            $daysAgoText = 'No notes found'; // Handle case where no notes exist
        }

        $data = [
                'notes' => $notes->count(),
                'note_created' => $daysAgoText
            ];

        return view('dashboard',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
