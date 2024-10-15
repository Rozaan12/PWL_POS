<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{

    public function index()
    {
        // Contoh insert data (jika diperlukan):
        // DB::insert('insert into m_level (level_kode, level_nama, created_at) values (?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'Insert data baru berhasil';

        // Update data
        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'Cus']);
        // return 'Update data berhasil. Jumlah data yang berhasil diupdate: ' . $row . ' baris';

        $data = DB::select('select * from m_level');
        return view('Level', ['data' => $data]);
    }
}
