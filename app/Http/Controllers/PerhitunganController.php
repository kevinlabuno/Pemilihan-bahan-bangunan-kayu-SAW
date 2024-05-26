<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bobot;
use App\Models\Data;
use App\Models\Datakonver;

class PerhitunganController extends Controller
{
    public function bobot_index(){
        return view('bobot');
    }

    public function bobot(Request $request){
        $request->validate([
            'harga' => 'required|numeric',
            'kualitas' => 'required|numeric',
            'estetika' => 'required|numeric',
            'waktu' => 'required|numeric',
            'serat' => 'required|numeric'
        ]);

        Bobot::create([
            'kriteria' => 'harga',
            'tipe' => 'cost',
            'bobot' => $request->harga,
            'w' => $request->harga / 100
        ]);

        $criteria = ['kualitas', 'estetika', 'waktu', 'serat'];
        foreach ($criteria as $kriteria) {
            Bobot::create([
                'kriteria' => $kriteria,
                'tipe' => 'benefit',
                'bobot' => $request->$kriteria,
                'w' => $request->$kriteria / 100
            ]);
        }
        return redirect()->back()->with('success', 'Bobot berhasil ditambahkan.');
    }

    public function index(){
        $this->hitung();
        $bobot = Bobot::all();
        $pure = Data::all();
        $data = Datakonver::orderBy('v', 'desc')->get(); 
        $normal = $this->normalizeData($data);
        return view('perhitungan', compact('bobot','normal','data','pure'));
    }

   private function normalizeData($data)
    {
    $criteria = ['c1', 'c2', 'c3', 'c4', 'c5'];
        $benefitCriteria = ['c2', 'c3', 'c4', 'c5']; // C2, C3, C4, dan C5 adalah kriteria benefit
        $costCriteria = ['c1']; // C1 adalah kriteria cost

        $normalizedData = [];

        $dataCopy = $data->map(function($item) {
            return $item->replicate();
        });

        foreach ($criteria as $criterion) {
            if (in_array($criterion, $benefitCriteria)) {
                $maxValue = $dataCopy->max($criterion);
                foreach ($dataCopy as $item) {
                    $item->$criterion = $item->$criterion / $maxValue;
                }
            } elseif (in_array($criterion, $costCriteria)) {
                $minValue = $dataCopy->min($criterion);
                foreach ($dataCopy as $item) {
                    $item->$criterion = $minValue / $item->$criterion;
                }
            }
        }

        foreach ($dataCopy as $item) {
            $normalizedData[] = [
                'alternatif' => $item->alternatif,
                'c1' => round($item->c1, 4),
                'c2' => round($item->c2, 4),
                'c3' => round($item->c3, 4),
                'c4' => round($item->c4, 4),
                'c5' => round($item->c5, 4),
            ];
        }

        return $normalizedData;
   }

   public function hitung()
    {
        $data = Datakonver::all();
        $bobot = Bobot::pluck('w')->toArray();
        if (count($bobot) !== 5) {
            return "Jumlah bobot harus 5.";
        }
        $normalizedData = $this->normalizeData($data);
        foreach ($normalizedData as $key => $row) {
            $v = 0;
            for ($i = 1; $i <= 5; $i++) {
                $v += $bobot[$i - 1] * $row['c' . $i];
            }

            $data[$key]->v = $v;
            $data[$key]->save();
        }
    }

}
