<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewGammeRequest;
use App\Models\FramingText;
use App\Models\Gamme;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AddGammeController extends Controller
{
    public function index()
    {
        $gammes = Gamme::all();

        return view('administration.add_gamme', compact('gammes'));
    }

    public function destroy(Request $request)
    {
        Gamme::destroy($request->input('delete_gamme'));

        return redirect(url()->previous())->with('success', 'L\'élément a été supprimé avec succès!');

    }

    public function store(NewGammeRequest $newGammeRequest)
    {
        $data = $newGammeRequest->validated();

        $data['name'] = strtolower(str_replace(' ', '_', $data['name']));

        Gamme::create($data);

        return redirect(url()->previous())->with('success', 'Enregistrement réussi !');
    }
}
