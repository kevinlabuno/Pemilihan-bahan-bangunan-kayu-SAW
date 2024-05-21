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
                <h4 class="featurette-heading">Bahan Bangunan Kayu </h4>
                <p>
                     Bahan bangunan kayu adalah material konstruksi yang terbuat dari berbagai 
                     jenis kayu yang diproses dan diolah untuk digunakan dalam pembangunan. 
                     Kayu digunakan dalam berbagai aplikasi, seperti rangka atap, dinding, lantai, 
                     pintu, jendela, dan furnitur. Material ini dipilih karena ketersediaannya yang 
                     melimpah dan kemudahan dalam pengerjaannya. Kayu juga dapat diolah menjadi berbagai 
                     bentuk dan ukuran sesuai kebutuhan konstruksi. Namun, kayu perlu diolah 
                     dan dirawat dengan baik untuk menghindari kerusakan akibat hama, kelembaban, dan risiko kebakaran.
                </p>
            </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto rounded-custom" data-src="holder.js/500x500/auto" alt="500x500" src="assets/img/kayu2.jpg" data-holder-rendered="true" style="width: 300px; height: 250px;">
                </div>
        </div>

        <hr>

         <div class="row featurette">
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
        </div>

        <hr>



       </main>

    
@endsection