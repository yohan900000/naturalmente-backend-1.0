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
    public function index(Gamme $gamme)
    {
        return view('administration.management_framing_text', ['gammes' => $gamme->all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FramingTextRequest $framingTextRequest)
    {
        $gammeName = Gamme::find($framingTextRequest->validated('gamme_id'));

        FramingText::create($framingTextRequest->validated());
        
        return redirect()->route('admin.gammes', $gammeName->name)->with('success', 'Enregistrement réussi !');
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
