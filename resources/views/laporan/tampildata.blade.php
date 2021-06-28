@extends('penjual.navbar')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Laporan Penjualan</h3>
        </div>
        <div class="card-body">
          <h3 class="text-center">Periode Bulan Juni 2021</h3>
          <div class="row">
            <div class="col col-lg-4 col-md-4">
              <h4 class="text-center">Ringkasan Transaksi</h4>
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Total Penjualan</td>
                    <td>Rp. 300.000</td>
                  </tr>
                  <tr>
                    <td>Total Transaksi</td>
                    <td>3 Transaksi</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col col-lg-8 col-md-8">
              <h4 class="text-center">Rincian Transaksi</h4>
              <div class="table-responsive">
                <table class="table table-stripped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>26/06/2021</td>
                      <td>100.000</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>27/06/2021</td>
                      <td>100.000</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>28/06/2021</td>
                      <td>100.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection