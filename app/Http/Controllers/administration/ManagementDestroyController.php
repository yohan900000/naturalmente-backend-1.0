<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Models\FramingText;
use App\Models\Product;
use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagementDestroyController extends Controller
{
    public function destroy(Request $request)
    {
        $framingTextId = $request->input('delete_framing_text');
        $textId = $request->input('delete_text');
        $productId = $request->input('delete_product');

        if ($framingTextId) {
            FramingText::destroy($framingTextId);
            return redirect(url()->current())->with('success', 'L\'élément a été supprimé avec succès!');
        } elseif ($textId) {
            Text::destroy($textId);
            return redirect(url()->current())->with('success', 'L\'élément a été supprimé avec succès!');
        } elseif ($productId) {

            $product = Product::find($productId);
            Product::destroy($productId);
            Storage::disk('public')->delete($product->picture);
            return redirect(url()->current())->with('success', 'L\'élément a été supprimé avec succès!');
        }
    }
}
