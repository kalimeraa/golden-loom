<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurtainController extends Controller
{
    public function edit(string $slug)
    {
        return view('curtains.edit', [
            'slug' => $slug
        ]);
    }
}
