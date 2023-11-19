<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Gamme;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;

class ManagementProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $gammes = Gamme::all();

        return view('administration.management_product', compact('gammes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $productRequest)
    {
        $gamme = Gamme::findOrFail($productRequest->validated('gamme_id'));

        /** @var UploadedFile $picture */
        $picture = $productRequest->file('picture')->store('products/' . $gamme->name , 'public');

        $gamme->product()->create(array_merge($productRequest->validated(), ['picture' => $picture]));

        return redirect()->route('admin.gammes', ['slug' => $gamme->name])->with('success', 'Enregistrement réussi !');

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
