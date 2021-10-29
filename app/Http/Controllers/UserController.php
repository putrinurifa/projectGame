<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(10);
        return view('admin.pengguna.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengguna.create');
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|password|min:8',
            'skor' => 'required|numeric',
            'role' => 'required',
        ]);
        //TODO : Implementasikan Proses Simpan Ke Database
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->skor = $request->get('skor');
        $user->role = $request->get('role');
        $user->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pengguna.index')->with('success', 'Pengguna Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.pengguna.edit', ['pengguna' => $user]);
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
            'name' => 'required',
            'email' => 'required|email',
            'skor' => 'required|numeric',
            'role' => 'required',
        ]);
        //TODO : Implementasikan Proses Simpan Ke Database
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->skor = $request->get('skor');
        $user->role = $request->get('role');
        $user->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pengguna.index')->with('success', 'Pengguna Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where(['id' => $id])->delete();
        return redirect()->route('pengguna.index')
            ->with('success', 'Pengguna Berhasil Dihapus');
    }

    public function delete($id)
    {
        $pengguna = User::find($id);
        return view('admin.pengguna.delete', compact('pengguna'));
    }

    public function search(Request $request)
    {
        $user = User::when($request->keyword, function ($query) use ($request) {
            $query->where('name', 'like', "%{$request->keyword}%")
                ->orWhere('email', 'like', "%{$request->keyword}%")
                ->orWhere('role', 'like', "%{$request->keyword}%");
        })->paginate(10);
        $user->appends($request->only('keyword'));
        return view('admin.pengguna.index', compact('user'));
    }
}
