<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatanAdmin = Activity::all();
        return view('admin.kegiatan-admin', ['kegiatanAdmin' => $kegiatanAdmin]);
    }

    public function show($id)
    {
        $kegiatanAdmin = Activity::findOrFail($id);
        return $kegiatanAdmin;
    }

    public function store(Request $request)
    {
        $kegiatan = Activity::create($request->all());
        return redirect('/kegiatan-admin');
    }

    public function edit(Request $request, $id)
    {
        $kegiatanAdmin = Activity::findOrFail($id);
        return view('admin.kegiatan-admin', ['kegiatanAdmin' => $kegiatanAdmin]);
    }

    public function update(Request $request, $id)
    {
        $kegiatanAdmin = Activity::findOrFail($id);
        $kegiatanAdmin->update($request->all());
        return redirect('/kegiatan-admin');
    }
}
