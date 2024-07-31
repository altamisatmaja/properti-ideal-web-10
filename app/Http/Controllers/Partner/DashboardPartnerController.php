<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Properti;
use Illuminate\Http\Request;

class DashboardPartnerController extends Controller
{
    public function index(){
        $user = auth()->user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partnerId = $partner->id_partner;

        $propertiCollection = Properti::with('foto_properti')
        ->where('partner_id', $partnerId)
        ->latest()
        ->take(5)
        ->get();

        $datas = [];

        foreach ($propertiCollection as $properti) {
            $propertiData = [
                'id_properti' => $properti->id_properti,
                'nama_properti' => $properti->nama_properti,
                'slug' => $properti->slug,
                'alamat' => $properti->alamat,
                'deskripsi' => $properti->deskripsi,
                'harga' => 'Rp ' . number_format($properti->harga, 0, ',', '.'),
                'latitude' => $properti->latitude,
                'longitude' => $properti->longitude,
                'status' => $properti->status,
                'kos' => [],
                'photos' => [],
            ];

            foreach ($properti->properti_kos as $kos) {
                $propertiData['kos'][] = [
                    'slug' => $kos->slug,
                    'luas_kos' => $kos->luas_kos,
                    'jenis_kamar_mandi' => $kos->jenis_kamar_mandi,
                ];
            }

            foreach ($properti->foto_properti as $photos) {
                $propertiData['photos'][] = [
                    'foto_properti' => asset($photos->foto_properti),
                    'deskripsi_foto' => $photos->deskripsi_foto,
                ];
            }

            $datas[] = $propertiData;
        }

        $user = auth()->user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partnerId = $partner->id_partner;

        return view('partner.dashboard.index', compact('datas'));
    }
}
