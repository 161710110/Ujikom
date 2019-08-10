@extends('temp')
@section('content')
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-gradient-primary text-white text-center card-shadow-primary">
                <div class="card-body">
                  <h6 class="font-weight-normal">Total Order</h6>
                  <h2 class="mb-0">{{ $pay->count()}}</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 grid-margin stretch-card">
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order status</h4>
                  <div class="d-flex table-responsive">
                  
                  </div>
                  <div class="table-responsive mt-2">
                    <table id="stud" class="table mt-3 border-top">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Nama Barang</th>
                          <th>Nomor Hp</th>
                          <th>Alamat</th>
                          <th>Provinsi</th>
                          <th>Kota</th>
                          <th>Kodepos</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Monthly Analytics</h4>
                  <p class="card-description">Products that are creating the most revenue and their sales throughout the year and the variation in behavior of sales.</p>
                  <div id="js-legend" class="chartjs-legend mt-4 mb-5 analytics-legend"></div>
                  <div class="demo-chart">
                    <canvas id="dashboard-monthly-analytics"></canvas>                  
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="row">
            <div class="col-md-4 grid-margin grid-margin-md-0">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center flex-wrap">
                    <img class="img-md rounded" src="https://via.placeholder.com/100x100" alt="">
                    <div class="wrapper ml-4">
                      <p class="font-weight-medium">Riris Yosi</p>
                      <p class="text-muted">saputrariris9@gmail.com</p>
                      <p class="text-info mb-0 font-weight-medium">Programmer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin grid-margin-md-0">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center flex-wrap">
                    <img class="img-md rounded" src="https://via.placeholder.com/100x100" alt="">
                    <div class="wrapper ml-4">
                      <p class="font-weight-medium">Fikri Haikal</p>
                      <p class="text-muted">aceng@fikri.com</p>
                      <p class="text-info mb-0 font-weight-medium">Programmer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center flex-wrap">
                    <img class="img-md rounded" src="https://via.placeholder.com/100x100" alt="">
                    <div class="wrapper ml-4">
                      <p class="font-weight-medium">Muhammad Gema</p>
                      <p class="text-muted">gems@gmail.com</p>
                      <p class="text-info mb-0 font-weight-medium">Programmer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  @endsection
  @push('scripts')
      <script type="text/javascript">
         $(function() {
         $('#stud').DataTable({
         processing: true,
         serverSide: true,
         ajax: '/h',
         columns: [
            { data: 'id', name: 'id' },
            { data: 'nama_lengkap', name: 'nama_lengkap' },
            { data: 'email', name: 'email' },
            { data: 'nama_bar', name: 'nama_bar' },
            { data: 'hp', name: 'hp' },
            { data: 'alamat', name: 'alamat' },
            { data: 'provinsi', name: 'provinsi' },
            { data: 'kota', name: 'kota' },
            { data: 'kodepos', name: 'kodepos' }
         ],
         "lengthMenu": [[-1, 10, 5, 2], ["All", 10, 5, 2]]
         });
       });
     </script>
  @endpush