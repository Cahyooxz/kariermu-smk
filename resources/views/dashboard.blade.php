@extends('layouts.app1')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12 mt-4">
      <div class="d-flex justify-content-between">
        <h4 class="h4">Welcome To Admin Dashboard SMKN 4 Tangerang</h4>
      </div>
      <div class="row mt-5 d-flex justify-content-center px-0 px-lg-3 px-xl-0 px-xl-1">
        {{-- data status karir tidak bekerja --}}
        <div class="col-6 col-sm-6 col-md-5 col-xl-3 col-lg-3 d-flex px-3 px-md-2 justify-content-md-start pe-2 mb-3">
          <div class="icon-round rounded-circle bg-purple p-3 text-center d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-users-line icon"></i>
          </div>
          <div class="d-flex flex-column gap-1 gap-sm-2 ms-2 ms-sm-2 ms-md-4">
            <p class="title-data fw-medium text-secondary">Pengangguran</p>
            <h1 class="detail-data fw-bold text-primary-emphasis">50</h1>
          </div>
        </div>
        {{-- Data status karir bekerja --}}
        <div class="col-6 col-sm-6 col-md-5 col-xl-3 col-lg-3 d-flex px-3 px-md-2 justify-content-md-start pe-2 mb-3">
          <div class="icon-round rounded-circle bg-purple p-3 text-center d-flex align-items-center justify-content-center">
            <i class="icon fa-solid fa-briefcase"></i>
          </div>
          <div class="d-flex flex-column gap-1 gap-sm-2 ms-2 ms-sm-2 ms-md-4">
            <p class="title-data fw-medium text-secondary">Bekerja</p>
            <h1 class="detail-data fw-bold text-primary-emphasis">1.600</h1>
          </div>
        </div>
        {{-- data status karir bekerja --}}
        <div class="col-6 col-sm-6 col-md-5 col-xl-3 col-lg-3 d-flex px-3 px-md-2 justify-content-md-start pe-2 mb-3">
          <div class="icon-round rounded-circle bg-purple p-3 text-center d-flex align-items-center justify-content-center">
            <i class="icon fa-solid fa-graduation-cap a-icon"></i>
            {{-- <i class="fa-solid fa-user-graduate a-icon icon"></i> --}}

          </div>
          <div class="d-flex flex-column gap-1 gap-sm-2 ms-2 ms-sm-2 ms-md-4">
            <p class="title-data fw-medium text-secondary">Kuliah</p>
            <h1 class="detail-data fw-bold text-primary-emphasis">500</h1>
          </div>
        </div>
        {{-- data status karir kuliah --}}
        <div class="col-6 col-sm-6 col-md-5 col-xl-3 col-lg-3 d-flex px-3 px-md-2 justify-content-md-start pe-2 mb-3">
          <div class="icon-round rounded-circle bg-purple p-3 text-center d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-shop a-icon icon"></i>
          </div>
          <div class="d-flex flex-column gap-1 gap-sm-2 ms-2 ms-sm-2 ms-md-4">
            <p class="title-data fw-medium text-secondary">Wirausaha</p>
            <h1 class="detail-data fw-bold text-primary-emphasis">600</h1>
          </div>
        </div>
      </div>
      <div class="row mt-5 px-0 px-lg-3 px-xl-1">
         <div class="col-12 w-50">
           <div class="d-flex flex-column gap-1 gap-sm-2 ms-2 ms-sm-2 ms-md-4">
             <div>
               <canvas id="myChart"></canvas>
             </div>
           </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection