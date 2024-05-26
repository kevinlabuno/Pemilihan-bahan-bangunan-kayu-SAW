@extends('layouts.app')
<style>
  .rounded-custom {
    border-radius: 20px; /* Anda dapat menyesuaikan nilai ini */
  }
</style>
@section('content')

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
             <h2 class="h3"><b> Beranda</b></h2>
          </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h4 class="featurette-heading"> Sistem Pendukung Keputusan untuk Pemilihan Bahan Bangunan Kayu dengan Metode Simple Additive Weighting (SAW)</h4>
                <p>
                    Sistem Pendukung Keputusan (SPK) untuk Pemilihan Bahan Bangunan Kayu dengan Metode Simple Additive Weighting (SAW) adalah sebuah aplikasi yang dirancang untuk membantu pengambil keputusan dalam memilih jenis kayu terbaik untuk konstruksi bangunan. Sistem ini mempertimbangkan berbagai kriteria penting seperti kekuatan, ketahanan terhadap hama, biaya, ketersediaan, dan estetika.
                    <hr>
                    Dengan menggunakan metode SAW, sistem ini mampu mengolah data dari berbagai alternatif jenis kayu dan memberikan penilaian secara objektif berdasarkan bobot yang diberikan untuk setiap kriteria. Proses ini melibatkan normalisasi nilai kriteria untuk setiap alternatif dan penghitungan nilai akhir yang mencerminkan kelayakan setiap jenis kayu. Alternatif dengan nilai tertinggi diusulkan sebagai pilihan terbaik.
                    <hr>
                    Sistem ini dirancang untuk memudahkan pengguna dalam melakukan evaluasi dan pemilihan bahan bangunan kayu secara efisien dan akurat, serta mendukung keputusan yang lebih terinformasi dan rasional.
                </p>
            </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto rounded-custom" data-src="holder.js/500x500/auto" alt="500x500" src="assets/img/kayu2.jpg" data-holder-rendered="true" style="width: 450px; height: 350px;">
                    <hr>
                    <a href="{{route('algoritma')}}" class="btn btn-primary btn-lg rounded-custom">Pelajari Lebih Lanjut</a>
                </div>
        </div>

        <hr>

         {{-- <div class="row featurette">
            <div class="col-md-7">
                <h4 class="featurette-heading">Metode SAW</h4>
                <p>
                     Metode Simple Additive Weighting (SAW) adalah 
                     salah satu metode dalam pengambilan keputusan multi-kriteria yang sering digunakan 
                     untuk menentukan pilihan terbaik dari sejumlah alternatif berdasarkan beberapa kriteria. 
                     Metode ini dikenal juga dengan nama metode penjumlahan terbobot.
                </p>

                <a href="" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                <a href="" class="btn btn-warning">Mulai Perhitungan?</a>
            </div>
        </div> --}}

        <hr>



       </main>

    
@endsection