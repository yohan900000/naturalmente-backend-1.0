<?php

namespace App\Http\Controllers\administration;

use App\Http\Controllers\Controller;
use App\Models\FramingText;
use App\Models\Text;
use Illuminate\Http\Request;

class ManagementDestroyController extends Controller
{
    public function destroy(Request $request)
    {
        $framingTextId = $request->input('delete_framing_text');
        $textId = $request->input('delete_text');

        if ($framingTextId) {
            FramingText::destroy($framingTextId);
            return redirect(url()->current())->with('success', 'L\'élément a été supprimé avec succès!');
        } elseif ($textId) {
            Text::destroy($textId);
            return redirect(url()->current())->with('success', 'L\'élément a été supprimé avec succès!');
        }
    }
}
