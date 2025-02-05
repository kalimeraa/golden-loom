<?php

namespace App\Http\Controllers;

use App\Models\Curtain;
use Illuminate\Http\Request;

class CurtainController extends Controller
{
    public function edit(string $slug)
    {
        $curtain = Curtain::where('slug', $slug)
        ->with('files')
        ->firstOrFail();

        return view('curtains.edit', [
            'slug' => $slug,
            'curtain' => $curtain,
        ]);
    }
}
