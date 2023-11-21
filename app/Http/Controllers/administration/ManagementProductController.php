<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\FramingText;
use App\Models\Gamme;
use App\Models\product;
use App\Models\Text;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagementProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gammes = Gamme::all();

        $product = new Product();

        return view('administration.management_product', compact('gammes', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $productRequest)
    {
        $gamme = Gamme::findOrFail($productRequest->validated('gamme_id'));

        /** @var UploadedFile $picture */
        $picture = $productRequest->file('picture')->store('products/' . $gamme->name, 'public');

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
        $gammes = Gamme::all();

        $product = Product::findOrFail($id);
        $product->load('gamme');


        return view('administration.management_product', compact('gammes', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $productRequest, string $id)
    {
        $product = Product::findOrFail($id);
        $product->load('gamme');
        $gammeName = Gamme::findOrFail($productRequest->validated('gamme_id'));

        if ($productRequest->hasFile('picture')) {
            Storage::disk('public')->delete($product->picture);
            /** @var UploadedFile $picture */
            $picture = $productRequest->file('picture')->store('products/' . $gammeName->name, 'public');
            $product->update(array_merge($productRequest->validated(), ['picture' => $picture]));
        } else {
            $product->update($productRequest->validated());
        }
        return redirect()->route('admin.gammes', ['slug' => $gammeName->name])->with('success', 'Enregistrement réussi !');
    }

    public function destroy(Request $request)
    {
        $product = Product::find($request->input('delete_product'));

        Product::destroy($request->input('delete_product'));
        
        Storage::disk('public')->delete($product->picture);

        return redirect(url()->previous())->with('success', 'L\'élément a été supprimé avec succès!');
    }

}
