<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\TextRequest;
use App\Models\Gamme;
use App\Models\Text;
use Illuminate\Http\Request;

class ManagementTextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gammes = Gamme::all();

        $text = new Text();

        return view('administration.management_text', compact('gammes', 'text'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TextRequest $textRequest)
    {

        $gamme = Gamme::findOrFail($textRequest->validated('gamme_id'));

        $gamme->text()->create($textRequest->validated());

        return redirect()->route('admin.gammes', ['slug' => $gamme->name])->with('success', 'Enregistrement réussi !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $text = Text::findOrFail($id);
        $text->load('gamme');

        return view('administration.management_text', [
            'text' => $text,
            'gammes' => Gamme::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, TextRequest $textRequest)
    {
        $text = Text::findOrFail($id);
        $text->load('gamme');

        $text->update($textRequest->validated());

        return redirect()->route('admin.gammes', ['slug' => $text->gamme->name])->with('success', 'Enregistrement réussi !');
    }
}
