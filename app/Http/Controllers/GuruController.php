<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    // menampilkan data guru
    public function index()
    {
        $guru = Guru::all();
        return view('guru', ['guru' => $guru]);
    }
    
    // menghapus data guru
    public function hapus($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        
        return redirect('/guru');
    }

    // menampilkan data guru yang sudah dihapus
    public function trash()
    {
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru' => $guru]);
    }

    // restore data guru yang dihapus
    public function kembalikan($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->restore();
        return redirect('/guru/trash');
    }

    // restore semua data guru yang sudah dihapus
    public function kembalikan_semua()
    {
        $guru = Guru::onlyTrashed();
        $guru->restore();
        return redirect('/guru/trash');
    }

    // hapus permanen
    public function hapus_permanen($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->forceDelete();
        return redirect('/guru/trash');
    }

    // hapus permanen semua guru yang sudah dihapus
    public function hapus_permanen_semua()
    {
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();
        return redirect('/guru/trash');
    }
}
