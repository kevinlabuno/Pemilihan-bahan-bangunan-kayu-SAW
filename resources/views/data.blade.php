@extends('layouts.app')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
             <h2 class="h3"><b>Data Kayu</b></h2>
          </div>


   <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/cempaka.jpg" alt="" width="100%" height="225">
            <div class="card-body">
              <h4 class="card-text">Kayu Cempaka</h4>
              <div class="d-flex justify-content-between align-items-center">
                <p>Kayu ringan dan lunak, sering digunakan untuk ukiran dan bahan bangunan.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm"> 
            <img src="assets/img/jati.jpg" alt="" width="100%" height="225">
            <div class="card-body">
             <h4 class="card-text">Kayu Jati</h4>
              <div class="d-flex justify-content-between align-items-center">
                <p>Kayu tahan terhadap serangga, sering digunakan untuk furnitur dan kapal.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <img src="assets/img/linggua.jpg" alt="" width="100%" height="225">
            <div class="card-body">
              <h4 class="card-text">Kayu Linggua</h4>
              <div class="d-flex justify-content-between align-items-center">
                <p> Kayu keras, berat, dan tahan lama, biasa digunakan untuk konstruksi dan perabot.</p>
              </div>
            </div>
          </div>
        </div>

              </div>
    </div>
    </div>

       <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/besi.jpg" alt="" width="100%" height="225">
            <div class="card-body">
              <h4 class="card-text">Kayu Besi</h4>
              <div class="d-flex justify-content-between align-items-center">
                <p> Kayu sangat keras dan padat, tahan lama, sering digunakan untuk konstruksi berat.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/nantu.jpg" alt="" width="100%" height="225">
            <div class="card-body">
              <h4 class="card-text">Kayu Nantu</h4>
              <div class="d-flex justify-content-between align-items-center">
                <p> Kayu keras dan berat, sering digunakan untuk bangunan dan perabotan berat.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img/mahoni.jpg" alt="" width="100%" height="225">
            <div class="card-body">
              <h4 class="card-text">Kayu Mahoni</h4>
              <div class="d-flex justify-content-between align-items-center">
                <p> Kayu keras dengan tekstur halus, sering digunakan untuk furnitur mewah dan alat musik.</p>
              </div>
            </div>
          </div>
        </div>

              </div>
    </div>
    </div>


</main>
    
@endsection