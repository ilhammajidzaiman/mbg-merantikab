<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function index()
    {
        $data['data'] = File::latest()
            ->take(9)
            ->get();
        return view('pages.file.index', $data);
    }

    public function show(string $id)
    {
        //
    }
}
