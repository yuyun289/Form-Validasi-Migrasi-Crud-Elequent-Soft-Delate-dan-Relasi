<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
// Memanggil model Pengguna
use App\Models\Pengguna;
 
class PenggunaController extends Controller
{
    public function index()
    {
        // Mengambil semua data pengguna
        $pengguna = Pengguna::all();
        // Mengembalikan data ke view
        return view('pengguna', ['pengguna' => $pengguna]);
    }
}
