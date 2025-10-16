<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $data['galery'] = Image::active()
            ->latest()
            ->take(9)
            ->get();
        return view('pages.galery.index', $data);
    }

    public function show(string $id)
    {
        //
    }
}
