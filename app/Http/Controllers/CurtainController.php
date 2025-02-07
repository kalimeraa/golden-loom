<?php

namespace App\Http\Controllers;

use App\Models\Curtain;

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
