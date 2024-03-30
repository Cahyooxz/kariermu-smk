@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12 mt-4">
      <div class="d-flex justify-content-between">
        <h4 class="h4">Data Nilai Siswa</h4>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-8 ms-3 mt-5 card" style="margin-bottom: 12rem">
            <h4 class="mt-3 ms-3 mb-3">Grafik Rata Rata Per Semester</h4>
            <div class="p-3">
              <canvas id="datanilai"></canvas>
            </div>
          </div>
          <div class="nilai col-3 ms-5 mt-5 card overflow-auto">
            <h4 class="mt-3 ms-3 mb-3">Nilai Rata-Rata</h4>
            <div class="container">
              <div class="row p-3">
                <div class="col-12 mb-3 d-flex flex-column gap-3 bg-danger rounded p-3 text-light">
                  <h5>Semester 1</h5>
                  <p>80</p>
                </div>
              </div>
              <div class="row p-3">
                <div class="col-12 mb-3 d-flex flex-column gap-3 bg-danger rounded p-3 text-light">
                  <h5>Semester 1</h5>
                  <p>80</p>
                </div>
              </div>
              <div class="row p-3">
                <div class="col-12 mb-3 d-flex flex-column gap-3 bg-danger rounded p-3 text-light">
                  <h5>Semester 1</h5>
                  <p>80</p>
                </div>
              </div>
              <div class="row p-3">
                <div class="col-12 mb-3 d-flex flex-column gap-3 bg-danger rounded p-3 text-light">
                  <h5>Semester 1</h5>
                  <p>80</p>
                </div>
              </div>
              <div class="row p-3">
                <div class="col-12 mb-3 d-flex flex-column gap-3 bg-danger rounded p-3 text-light">
                  <h5>Semester 1</h5>
                  <p>80</p>
                </div>
              </div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection