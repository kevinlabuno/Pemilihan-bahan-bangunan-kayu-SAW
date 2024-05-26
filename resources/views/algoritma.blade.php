@extends('layouts.app')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
             <h2 class="h3"><b>Simple Additive Weighting (SAW) </b></h2>
          </div>
          <h6>Metode Simple Additive Weighting (SAW) adalah salah<br> satu metode dalam pengambilan 
            keputusan multi-kriteria yang sering digunakan untuk<br> menentukan pilihan terbaik dari 
            sejumlah alternatif berdasarkan beberapa kriteria.<br> Metode ini dikenal juga dengan 
            nama metode penjumlahan terbobot.</h6>
          <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">1. Menentukan Kriteria dan Bobot </h6>
                            <br>
                            <p class="mb-0 opacity-75">Tentukan kriteria yang relevan untuk mengevaluasi alternatif yang tersedia.<br>
                                Berikan bobot untuk setiap kriteria berdasarkan tingkat kepentingannya.<br> 
                                Bobot biasanya dinyatakan dalam bentuk persentase atau skala tertentu, <br>
                                 di mana total bobot harus sama dengan 1 atau 100%.</p>
                        </div>
                        <small class="opacity-50 text-nowrap">Step 1</small>
                    </div>
                </a>
    
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">2. Membangun Matriks Keputusan</h6>
                            <br>
                            <p class="mb-0 opacity-75">Buat matriks keputusan yang berisi nilai-nilai setiap alternatif terhadap setiap kriteria.<br>
                               Nilai ini bisa didapatkan melalui pengukuran atau penilaian subyektif.<br> 
                                 di mana total bobot harus sama dengan 1 atau 100%.</p>
                        </div>
                            <small class="opacity-50 text-nowrap">Step 2</small>
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">3. Normalisasi Matriks Keputusan</h6>
                            <br>
                            <p class="mb-0 opacity-75">Normalisasi dilakukan untuk mengubah berbagai skala penilaian ke dalam skala yang sama.<br>
                            </p>
                        </div>
                            <small class="opacity-50 text-nowrap">Step 3</small>
                    </div>
                </a>

                 <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">4. Menghitung Nilai Terbobot</h6>
                            <br>
                            <p class="mb-0 opacity-75">Kalikan nilai normalisasi dengan bobot kriteria yang sesuai untuk mendapatkan  
                                <br>matriks keputusan terbobot: 𝑉𝑖𝑗=𝑊Vij =Wj ×Rij
                            </p>
                        </div>
                            <small class="opacity-50 text-nowrap">Step 4</small>
                    </div>
                 </a>

                 <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">5. Penjumlahan Nilai Terbobot</h6>
                            <br>
                            <p class="mb-0 opacity-75">Jumlahkan nilai terbobot untuk setiap alternatif: Vi =∑j=n Vij
                            </p>
                        </div>
                            <small class="opacity-50 text-nowrap">Step 5</small>
                    </div>
                 </a>

                 <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">6. Penentuan Alternatif Terbaik</h6>
                            <br>
                            <p class="mb-0 opacity-75">Alternatif dengan nilai total tertinggi dianggap sebagai alternatif terbaik.
                            </p>
                        </div>
                            <small class="opacity-50 text-nowrap">Step 6</small>
                    </div>
                 </a>
    


  </div>
</div>



</main>
    
@endsection