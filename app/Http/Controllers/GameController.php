<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::orderBy('kategori')->paginate(10);
        return view('admin.soal.index', ['game' => $game]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.soal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'kategori' => 'required',
            'no_soal' => 'required|numeric',
            'soal' => 'required',
            'skor' => 'required|numeric',
        ]);
        //TODO : Implementasikan Proses Simpan Ke Database
        $game = new Game;
        $game->soal = $request->get('soal');
        if ($request->get('jawaban') == null) {
            $game->pilihan1 = $request->get('pilihan1');
            $game->pilihan2 = $request->get('pilihan2');
            $game->pilihan3 = $request->get('pilihan3');
            $game->jawaban = $request->get('jawabanPilih');
        } else {
            $game->jawaban = $request->get('jawaban');
            if ($request->get('kategori') == 'Sulit') {
                $file = $request->file('image');
                $image_name = $file->getClientOriginalName();

                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'images';
                $file->move($tujuan_upload, $image_name);
                $game->image = $image_name;
            }
        }

        $game->no_soal = $request->get('no_soal');
        $game->kategori = $request->get('kategori');
        $game->skor = $request->get('skor');
        $game->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('soal.index')->with('success', 'Soal Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        return view('admin.soal.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::find($id);
        return view('admin.soal.edit', ['game' => $game]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'kategori' => 'required',
            'no_soal' => 'required|numeric',
            'soal' => 'required',
            'skor' => 'required|numeric',
        ]);
        //TODO : Implementasikan Proses Simpan Ke Database
        $game = Game::find($id);
        $game->soal = $request->get('soal');
        if ($request->get('jawaban') == null) {
            $game->pilihan1 = $request->get('pilihan1');
            $game->pilihan2 = $request->get('pilihan2');
            $game->pilihan3 = $request->get('pilihan3');
            $game->jawaban = $request->get('jawabanPilih');
        } else {
            $game->jawaban = $request->get('jawaban');
            if ($request->get('kategori') == 'Sulit') {
                if ($request->file('image') != null) {
                    File::delete('images/' . $game->image);
                    $file = $request->file('image');
                    $image_name = $file->getClientOriginalName();

                    // isi dengan nama folder tempat kemana file diupload
                    $tujuan_upload = 'images';
                    $file->move($tujuan_upload, $image_name);
                    $game->image = $image_name;
                }
            }
        }

        $game->no_soal = $request->get('no_soal');
        $game->kategori = $request->get('kategori');
        $game->skor = $request->get('skor');
        $game->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('soal.index')->with('success', 'Soal Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::find($id);
        File::delete('images/' . $game->image);
        $game->delete();
        return redirect()->route('soal.index')
            ->with('success', 'Soal Berhasil Dihapus');
    }

    public function delete($id)
    {
        $game = Game::find($id);
        return view('admin.soal.delete', compact('game'));
    }

    public function search(Request $request)
    {
        $game = Game::when($request->keyword, function ($query) use ($request) {
            $query->where('soal', 'like', "%{$request->keyword}%")
                ->orWhere('kategori', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $game->appends($request->only('keyword'));
        return view('admin.soal.index', compact('game'));
    }
}
