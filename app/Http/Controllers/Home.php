<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

class Home extends Controller
{
    public function index()
    {
        $response = Http::get("https://super.pascasarjanausbypkp.ac.id/api/get-setting");
        $response1 = Http::get("https://super.pascasarjanausbypkp.ac.id/api/cek-gelombang");
        $response2 = Http::get("https://super.pascasarjanausbypkp.ac.id/api/get-galeri");
                        
        if ($response->successful() && $response1->successful() && $response2->successful()) {
            $setting = $response->json();
            $gelombang = $response1->json();
            $galeri = $response2->json();
            return view('index', compact('setting','gelombang','galeri'));
        } else {
            return response()->json(['error' => 'Database access failed']);
        }
       // $api =  $response->json();
        //echo number_format($api['data']['biaya'],0,',','.');
        //return view('index');
    }

    public function pendaftaran()
    {
        $response = Http::get("https://super.pascasarjanausbypkp.ac.id/api/get-setting");
        $setting = $response->json();
        $response1 = Http::get("https://super.pascasarjanausbypkp.ac.id/api/get-jurusan");
        $jurusan = $response1->json();
        $response2 = Http::get("https://super.pascasarjanausbypkp.ac.id/api/cek-gelombang");
        $gelombang = $response2->json();
        $response3 = Http::get("https://super.pascasarjanausbypkp.ac.id/api/get-rekening");
        $rekening = $response3->json();
        if ($response->successful() && $response1->successful() && $response2->successful() && $response3->successful()) {
            return view('daftar', compact('setting', 'jurusan', 'gelombang','rekening'));
        } else {
            return response()->json(['error' => 'Database access failed']);
        }
    }

    public function pendaftaran_notif($status)
    {
        return view('daftar_notif ',  ['status' => $status]);     
    }

    public function konsentrasi_jurusan(Request $request)
    {
         $id_jurusan = $request->input('id_jurusan');
      
        // Lakukan request POST ke API
        $response = Http::post('https://super.pascasarjanausbypkp.ac.id/api/get-konsentrasi', [
            'id_jurusan' => $id_jurusan,
        ]);

        // Ambil data dari respons
        $konsentrasi = $response->json()['data'];

        // Buat string HTML untuk options
        $options = "<option class='option-form' value=''>Pilih Konsentrasi</option>";
        foreach ($konsentrasi as $item) {
            $options .= "<option class='option-form' value='" . $item['konsentrasi'] . "'>" . $item['konsentrasi'] . "</option>";
        }
       
        // Kembalikan string HTML sebagai respons
        return response()->json([
            'options' => $options,
        ]);
    }

    public function cekapi($text)
    {
        $response = Http::post('https://super.pascasarjanausbypkp.ac.id/api/get-konsentrasi', [
            'id_jurusan' => '14',
        ]);

        // Ambil data dari respons
        $konsentrasi = $response->json()['data'];
        foreach ($konsentrasi as $item) {
            echo $item['konsentrasi']."<br>";
        }
    }
}
