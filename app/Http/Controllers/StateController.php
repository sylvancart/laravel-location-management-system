<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StateController extends Controller
{
    
    public function index()
    {
        $states = State::where('user_id', Auth::id())
                    ->orderBy('created_at', 'desc')
                    ->get();
        
        return view('backend.states.index', compact('states'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required|in:hidden,visible',
        ]);

        State::create([
            'name' => $request->name,
            'user_id' => Auth::id(),
            'status' => $request->status,
        ]);

        return redirect()->route('states.index')->with('success', 'State created successfully.');
    }

    public function edit(State $state)
    {
        if ($state->user_id != Auth::id()) {
            return redirect()->route('states.index')->with('error', 'You do not have permission to edit this state.');
        }
        return view('backend.states.edit', compact('state'));
    }

    public function update(Request $request, State $state)
    {
        $request->validate([
            'name' => 'required|unique:states,name,' . $state->id,
            'status' => 'required|in:hidden,visible',
        ]);


        if ($state->user_id != Auth::id()) {
            return redirect()->route('states.index')->with('error', 'You do not have permission to update this state.');
        }

        $state->update($request->all());

        return redirect()->route('states.index')->with('success', 'State updated successfully.');
    }

    public function destroy(State $state)
    {
        if ($state->user_id != Auth::id()) {
            return redirect()->route('states.index')->with('error', 'You do not have permission to delete this state.');
        }

        $state->delete();

        return redirect()->route('states.index')->with('success', 'State deleted successfully.');
    }
}
