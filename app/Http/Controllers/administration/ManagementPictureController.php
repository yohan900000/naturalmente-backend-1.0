<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\PictureRequest;
use App\Models\Gamme;
use App\Models\Picture;
use App\Models\Product;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagementPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gammes = Gamme::all();

        $picture = new Picture();

        return view('administration.management_picture', compact('gammes', 'picture'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PictureRequest $pictureRequest)
    {
        $gamme = Gamme::findOrFail($pictureRequest->validated('gamme_id'));

        /** @var UploadedFile $picture */
        $picture = $pictureRequest->file('picture')->store('pictures/' . $gamme->name, 'public');

        $gamme->picture()->create(array_merge($pictureRequest->validated(), ['picture' => $picture]));

        return redirect()->route('admin.gammes', ['slug' => $gamme->name])->with('success', 'Enregistrement réussi !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $pictures = Picture::find($request->input('delete_picture'));

        $gammeFolder = public_path('storage/pictures/' . $pictures->gamme->name);

        Picture::destroy($request->input('delete_picture'));

        Storage::disk('public')->delete($pictures->picture);

        is_dir($gammeFolder) && (count(scandir($gammeFolder)) <= 2) && rmdir($gammeFolder);

        return redirect(url()->previous())->with('success', 'L\'élément a été supprimé avec succès!');
    }
}
