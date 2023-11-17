<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\FramingTextRequest;
use App\Models\FramingText;
use App\Models\Gamme;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class ManagementFramingTextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gammes = Gamme::all();

        $framingText = new FramingText();

        return view('administration.management_framing_text', compact('gammes', 'framingText'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FramingTextRequest $framingTextRequest)
    {
        $gamme = Gamme::findOrFail($framingTextRequest->validated('gamme_id'));

        $gamme->framingText()->create($framingTextRequest->validated());

        return redirect()->route('admin.gammes', ['slug' => $gamme->name])->with('success', 'Enregistrement réussi !');
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(string $id)
    {
        $framingText = FramingText::where('id', $id)->firstOrFail();

        return view('administration.management_framing_text', [
            'framingText' => $framingText,
            'gammes' => Gamme::all()
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, FramingTextRequest $framingTextRequest)
    {
        $framingText = FramingText::where('id', $id);
        $gammeName = Gamme::find($framingTextRequest->validated('gamme_id'));

        $framingText->update($framingTextRequest->validated());
        return redirect()->route('admin.gammes', ['slug' => $gammeName->name])->with('success', 'Enregistrement réussi !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        FramingText::findOrFail($request->input('delete_framing_text'))->delete();
        return redirect(url()->current())->with('success', 'L\'élément a été supprimé avec succès!');
    }
}
