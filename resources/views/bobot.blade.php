@extends('layouts.app')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
             <h2 class="h3"><b> Pembobotan</b></h2>
          </div>
          @if (session('success'))
            <div class="alert alert-primary">{{session('success')}}</div>
          @endif

          <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Bobot Nilai Kriteria</span>
          <span class="badge bg-primary rounded-pill"> %</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Harga (Cost)</h6>
              <small class="text-body-secondary">Bobot Harga</small>
            </div>
            <p id="harga-value" class="text-body-secondary">%</p>
            <p id="harga-value2" class="text-body-secondary"></p>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Kualitas (Benefit)</h6>
              <small class="text-body-secondary">Bobot Kualitas</small>
            </div>
            <p id="kualitas-value" class="text-body-secondary">%</p>
            <p id="kualitas-value2" class="text-body-secondary"></p>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Estetika (Benefit)</h6>
              <small class="text-body-secondary">Bobot Estetika</small>
            </div>
            <p id="estetika-value" class="text-body-secondary">%</p>
            <p id="estetika-value2" class="text-body-secondary"></p>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Jangka Waktu (Benefit)</h6>
              <small class="text-body-secondary">Bobot Jangka Waktu</small>
            </div>
            <p id="waktu-value" class="text-body-secondary">%</p>
            <p id="waktu-value2" class="text-body-secondary"></p>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Serat Kayu (Benefit)</h6>
            </div>
            <p id="serat-value" class="text-body-secondary">%</p>
              <p id="serat-value2" class="text-body-secondary"></p>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total Bobot</span>
            <p id="total-value" class="text-body-secondary">%</p>
          </li>
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Masukan Bobot Kriteria</h4>
        <form class="needs-validation" method="POST" action="{{route('bobot.post')}}">
         @csrf

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="harga" class="form-label">Harga (Cost)</label>
              <input type="number" class="form-control" id="harga" name="harga" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Masukan pembobotan.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Kualitas (Benefit)</label>
              <input type="number" class="form-control" id="kualitas" name="kualitas" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Masukan Kualitas.
              </div>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Estetika (Benefit)</label>
              <input type="number" class="form-control" id="estetika" name="estetika" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Masukan Estetika.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Jangka Waktu (Benefit)</label>
              <input type="number" class="form-control" id="waktu" name="waktu" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Masukan Jangka Waktu.
              </div>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Serat Kayu (Benefit)</label>
              <input type="number" class="form-control" id="serat" name="serat" placeholder="" value="" required="">
              <div class="invalid-feedback">
                 Masukan Serat Kayu.
              </div>
            </div>

          </div>

          <hr class="my-4">
          <h5 class="mb-3">Total bobot semua kriteria harus 100%</h5>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Proses Perhitungan</button>
        </form>
      </div>
    </div>
    

</main>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', (event) => {
    const updateValues = [
        { inputId: 'harga', valueId: 'harga-value', valueId2: 'harga-value2' },
        { inputId: 'kualitas', valueId: 'kualitas-value', valueId2: 'kualitas-value2' },
        { inputId: 'estetika', valueId: 'estetika-value', valueId2: 'estetika-value2' },
        { inputId: 'waktu', valueId: 'waktu-value', valueId2: 'waktu-value2' },
        { inputId: 'serat', valueId: 'serat-value', valueId2: 'serat-value2' }
    ];

    function updateTotal() {
        let total = 0;
        updateValues.forEach(({ inputId }) => {
            const inputElement = document.getElementById(inputId);
            total += parseFloat(inputElement.value) || 0; // Add input value to total
        });
        document.getElementById('total-value').textContent = total + ' %';
    }

    updateValues.forEach(({ inputId, valueId, valueId2 }) => {
        const inputElement = document.getElementById(inputId);
        const valueElement = document.getElementById(valueId);
        const valueElement2 = document.getElementById(valueId2);

        inputElement.addEventListener('input', function () {
            const value = inputElement.value;
            valueElement.textContent = value + ' %';
            valueElement2.textContent = 'w (' + value / 100 + ')';
            updateTotal(); // Update the total each time an input value changes
        });
    });

    updateTotal(); // Initial calculation
});

</script>
@endsection