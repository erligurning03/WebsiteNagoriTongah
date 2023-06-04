@extends('layouts.navbar_warga')
@section('css')
<style>
    .chart-container {
        width: 400px; /* Ubah lebar wadah chart */
        height: 400px; /* Ubah tinggi wadah chart */
        margin-bottom: 20px; /* Jarak antara chart */
    }
</style>
@endsection
@section('container')

      {{-- start section1 --}}
      {{-- <section class="container mt-5">
        <div class="row">
          <div class="col-lg-6">
            <h2>Diagram Lingkaran</h2>
            <div class="chart-container">
              <canvas id="pieChart"></canvas>
            </div>
          </div>
          <div class="col-lg-6">
            <h2>Keterangan Warna</h2>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Kategori 1
                <span class="badge bg-primary"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Kategori 2
                <span class="badge bg-success"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Kategori 3
                <span class="badge bg-warning"> </span>
              </li>
            </ul>
          </div>
        </div>
      </section> --}}
      
      {{-- end section grafiki --}}

      {{-- start pernaikan grafik --}}
      {{-- <section class="container mt-5">
        <div class="row">
          <div class="col-lg-6">
            <h2>TRANSPARANSI BELANJA NAGORI NAGORI TONGAH TAHUN 2023</h2>
            <div class="chart-container">
              <canvas id="incomeChart"></canvas>
            </div>
          </div>
          <div class="col-lg-6">
            <h2>Keterangan Warna</h2>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                bidang pemerintahan nagori
                <span class="badge bg-primary"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                bidang pembangunan nagori
                <span class="badge bg-success"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                bidang pembinaan nagori
                <span class="badge bg-warning"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                bidang pemberdayaan nagori
                <span class="badge bg-warning"> </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h2>TRANSPARANSI PENDAPATAN NAGORI NAGORI TONGAH TAHUN 2023</h2>
            <div class="chart-container">
              <canvas id="expenseChart"></canvas>
            </div>
          </div>
          <div class="col-lg-6">
            <h2>Keterangan Warna</h2>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Dana Desa (DD)
                <span class="badge bg-primary"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Alokasi Dana Nagori
                <span class="badge bg-success"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Bagi Hasil Pajak dann Retribusi Daerah
                <span class="badge bg-warning"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                pendapatan lain-lain
                <span class="badge bg-success"> </span>
              </li>
            </ul>
          </div>
        </div>
      </section> --}}

      <section class="container mt-5">
        <div class="row">
          <div class="col-lg-6">
            <h2>TRANSPARANSI PENDAPATAN NAGORI NAGORI TONGAH TAHUN 2023</h2>
            <div class="chart-container">
              <canvas id="incomeChart"></canvas>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="chart-container">
              <canvas id="pendapatanChart"></canvas>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h2>TRANSPARANSI BELANJA NAGORI NAGORI TONGAH TAHUN 2023</h2>
            <div class="chart-container">
              <canvas id="expenseChart"></canvas>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="chart-container">
              <canvas id="pengeluaranChart"></canvas>
          </div>
          </div>
        </div>
      </section>

      {{-- start card --}}
      <section class="container mt-5">
        <div class="row">
          {{-- <div class="col-lg-6">
            <h2>Diagram Batang</h2>
            <div class="chart-container">
              <canvas id="barChart"></canvas>
            </div>
          </div> --}}
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">APBDES 2023 PELAKSANAAN </h5>
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-sm-6 col-lg-6">total pendapatan  </div>
                      <div class="col-sm-1 col-lg-1">:</div>
                      @foreach ($pendapatanDataa as $pendapatan)
                      <div class="col-sm-5 col-lg-5">Rp {{ $pendapatan->total_pendapatan }}</div>
                      @endforeach                  
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">total belanja</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      @foreach ($pengeluaranDataa as $pengeluaran)
                      <div class="col-sm-5 col-lg-5">Rp {{ $pengeluaran->total_pengeluaran }}</div>
                      @endforeach
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">APBEDES 2023 PENDAPATAN</h5>
                <ul class="list-group">
                  <li class="list-group-item">
                      <div class="row">
                        @foreach ($pendapatanData as $data)
                        <div class="col-lg-6 col-sm-6">{{ $data->sumber }}</div>
                        <div class="col-lg-1 col-sm-1">:</div>
                        <div class="col-lg-5 col-sm-5">Rp {{ $data->total }}</div>
                        @endforeach
                      </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">APBEDES 2023 PEMBELANJAAN</h5>
                <ul class="list-group">
                  <li class="list-group-item">
                      <div class="row">
                        @foreach ($pengeluaranData as $data)
                        <div class="col-lg-6 col-sm-6">{{ $data->bidang }}</div>
                        <div class="col-lg-1 col-sm-1">:</div>
                        <div class="col-lg-5 col-sm-5">Rp {{ $data->total }}</div>
                        @endforeach
                      </div>
                  </li>
                  {{-- <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">bidang pelaksanaan pembangunan Nagori</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      <div class="col-lg-5 col-sm-5">Rp371.000.100</div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">bidang pembinaan nagori</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      <div class="col-lg-5 col-sm-5">Rp0,-</div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">bidang pemberdayaan masyarakat</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      <div class="col-lg-5 col-sm-5">Rp16.000.100</div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">bidang penanggulangan bencana, darurat, dan mendesak</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      <div class="col-lg-5 col-sm-5">Rp327.000.100</div>
                    </div>
                  </li> --}}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      {{-- end card --}}
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        // Mengambil data pendapatan dari URL /chart/data
        fetch('/chart/data')
            .then(response => response.json())
            .then(data => {
                const pendapatanLabels = data.pendapatan.map(item => item.sumber);
                const pendapatanValues = data.pendapatan.map(item => item.total);

                const ctxPendapatan = document.getElementById('pendapatanChart').getContext('2d');
                const pendapatanChart = new Chart(ctxPendapatan, {
                    type: 'pie', // Mengubah tipe chart menjadi 'pie'
                    data: {
                        labels: pendapatanLabels,
                        datasets: [{
                            label: 'Pendapatan',
                            data: pendapatanValues,
                            backgroundColor: ['rgba(85, 107, 47, 0.5)', 'rgba(240, 230, 140, 0.5)', 'rgba(189, 183, 107, 0.5)', 'rgba(107, 142, 35, 0.5)', 'rgba(194, 178, 128, 0.5)'], // Warna latar belakang untuk setiap bagian lingkaran
                            borderColor: ['rgba(85, 107, 47, 1)', 'rgba(240, 230, 140, 1)', 'rgba(189, 183, 107, 1)', 'rgba(107, 142, 35, 1)', 'rgba(194, 178, 128, 1)'], // Warna batas untuk setiap bagian lingkaran
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
    </script>

    <script>
        // Mengambil data pengeluaran dari URL /chart/data
        fetch('/chart/data')
            .then(response => response.json())
            .then(data => {
                const pengeluaranLabels = data.pengeluaran.map(item => item.bidang);
                const pengeluaranValues = data.pengeluaran.map(item => item.total);

                const ctxPengeluaran = document.getElementById('pengeluaranChart').getContext('2d');
                const pengeluaranChart = new Chart(ctxPengeluaran, {
                    type: 'pie', // Mengubah tipe chart menjadi 'pie'
                    data: {
                        labels: pengeluaranLabels,
                        datasets: [{
                            label: 'Pengeluaran',
                            data: pengeluaranValues,
                            backgroundColor: ['rgba(85, 107, 47, 0.5)', 'rgba(240, 230, 140, 0.5)', 'rgba(189, 183, 107, 0.5)', 'rgba(107, 142, 35, 0.5)', 'rgba(194, 178, 128, 0.5)'], // Warna latar belakang untuk setiap bagian lingkaran
                            borderColor: ['rgba(85, 107, 47, 1)', 'rgba(240, 230, 140, 1)', 'rgba(189, 183, 107, 1)', 'rgba(107, 142, 35, 1)', 'rgba(194, 178, 128, 1)'], // Warna batas untuk setiap bagian lingkaran
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
    </script>
@endsection

      {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        // Inisialisasi data diagram pemasukan
        var incomeData = {
          labels: ["Kategori 1", "Kategori 2", "Kategori 3"],
          datasets: [{
            data: [40, 30, 30],
            backgroundColor: ["#007bff", "#28a745", "#ffc107"]
          }]
        };
      
        // Inisialisasi opsi diagram pemasukan
        var incomeOptions = {
          responsive: true,
          animation: {
            animateRotate: true,
            animateScale: true
          }
        };
      
        // Menggambar diagram pemasukan menggunakan Chart.js
        var incomeChart = new Chart(document.getElementById('incomeChart'), {
          type: 'doughnut',
          data: incomeData,
          options: incomeOptions
        });
      
        // Inisialisasi data diagram pengeluaran
        var expenseData = {
          labels: ["Kategori A", "Kategori B", "Kategori C"],
          datasets: [{
            data: [20, 50, 30],
            backgroundColor: ["#dc3545", "#6c757d", "#ffc107"]
          }]
        };
      
        // Inisialisasi opsi diagram pengeluaran
        var expenseOptions = {
          responsive: true,
          animation: {
            animateRotate: true,
            animateScale: true
          }
        };
      
        // Menggambar diagram pengeluaran menggunakan Chart.js
        var expenseChart = new Chart(document.getElementById('expenseChart'), {
          type: 'doughnut',
          data: expenseData,
          options: expenseOptions
        });
      </script> --}}
      
      {{-- end perbaikan grafik --}}
      
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Inisialisasi data diagram lingkaran
  var pieData = {
    labels: ["Kategori 1", "Kategori 2", "Kategori 3"],
    datasets: [{
      data: [30, 50, 20],
      backgroundColor: ["#007bff", "#28a745", "#ffc107"]
    }]
  };

  // Inisialisasi opsi diagram lingkaran
  var pieOptions = {
    responsive: true,
    animation: {
      animateRotate: true,
      animateScale: true
    }
  };

  // Menggambar diagram lingkaran menggunakan Chart.js
  var pieChart = new Chart(document.getElementById('pieChart'), {
    type: 'doughnut',
    data: pieData,
    options: pieOptions
  });
</script> --}}
