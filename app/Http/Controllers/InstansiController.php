<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstansiController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        
        return view('pegawai.index', compact('user'));
    }

    public function create()
    {
        $instansi = Instansi::all();
        return view('pegawai.create', compact('instansi'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'instansi' => 'required'
        ]);
        $input = $request->all();

        $pegawai = User::find(Auth::user()->id);
        // dd($pegawai);
        $pegawai->instansi_id = $input['instansi'];
        $pegawai->save();

        return redirect(route('pegawai_index'));
    }
}
