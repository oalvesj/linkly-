<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function index()
    {
        $links = Auth::user()->links()->orderBy('order')->get();
        return view('links.index', compact('links'));
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url'   => 'required|url',
            'icon'  => 'nullable|string|max:100',
        ]);

        Auth::user()->links()->create($request->all());

        return redirect()->route('links.index')->with('success', 'Link adicionado!');
    }

    public function edit(Link $link)
    {
        $this->authorize('update', $link);
        return view('links.edit', compact('link'));
    }

    public function update(Request $request, Link $link)
    {
        $this->authorize('update', $link);

        $request->validate([
            'title' => 'required|string|max:255',
            'url'   => 'required|url',
            'icon'  => 'nullable|string|max:100',
        ]);

        $link->update($request->all());

        return redirect()->route('links.index')->with('success', 'Link atualizado!');
    }

    public function destroy(Link $link)
    {
        $this->authorize('delete', $link);
        $link->delete();
        return redirect()->route('links.index')->with('success', 'Link removido!');
    }
}
