@extends('layouts.app1')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12 mt-4">
        <div class="d-flex">
          <h4>Data Siswa</h4>
          <a href="/siswa/tambah" class="py-1 px-3 text-center align-items-center d-flex rounded text-decoration-none button ms-auto"><i class="fa-solid fa-user-plus me-2"></i>Tambah siswa</a>
        </div>
        <div class="container-fluid px-4">
          <div class="row">
            <div class="col p-0">
              <div class="input-group mb-3 mt-3">
                <div class="dropdown">
                  <button class="btn dropdown-toggle ps-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">Sort by</button>
                  <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button">A-Z</button></li>
                    <li><button class="dropdown-item" type="button">Z-A</button></li>
                    <li><button class="dropdown-item" type="button">Kejuruan</button></li>
                    <li><button class="dropdown-item" type="button">Tahun Ajaran</button></li>
                  </ul>
                </div>
                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari siswa berdasarkan NIP atau Nama">
              </div>
              <div class="card mt-3" style="height: 25rem">
                <div class="card-body table-responsive" style="background-color: #FCFAFA;">
                  <table class="table table-bordered">
                    <tr>
                      <th>NISN</th>
                      <th>Nama</th>
                      <th>Kejuruan</th>
                      <th>Tahun Kelulusan</th>
                      <th>Status Karir</th>
                      <th>Aksi</th>
                    </tr>
                    <tr>
                      <td>3671800912</td>
                      <td>Cahyo Kusumo</td>
                      <td>Rekayasa Perangkat Lunak (RPL)</td>
                      <td>2022</td>
                      <td>KULIAH</td>
                      <td class="py-4 py-lg-3 d-flex flex-column flex-md-row gap-4 gap-md-3">
                        <a href="/siswa/edit" class="button py-2 px-3 rounded text-decoration-none text-center"><i class="bi bi-person-fill-gear me-2 i-icon"></i>Edit</a>
                        <a href="/" class="button-reset py-2 px-3 rounded text-decoration-none text-center"><i class="bi bi-person-fill-dash me-2 i-icon"></i>Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3671800912</td>
                      <td>Ajeril Kusumo</td>
                      <td>Rekayasa Perangkat Lunak (RPL)</td>
                      <td>2022</td>
                      <td>KULIAH</td>
                      <td class="py-4 py-lg-3 d-flex flex-column flex-md-row gap-4 gap-md-3">
                        <a href="/siswa/edit" class="button py-2 px-3 rounded text-decoration-none text-center"><i class="bi bi-person-fill-gear me-2 i-icon"></i>Edit</a>
                        <a href="/" class="button-reset py-2 px-3 rounded text-decoration-none text-center"><i class="bi bi-person-fill-dash me-2 i-icon"></i>Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3671800912</td>
                      <td>Jojo Kusumo</td>
                      <td>Rekayasa Perangkat Lunak (RPL)</td>
                      <td>2021</td>
                      <td>KULIAH</td>
                      <td class="py-4 py-lg-3 d-flex flex-column flex-md-row gap-4 gap-md-3">
                        <a href="/siswa/edit" class="button py-2 px-3 rounded text-decoration-none text-center"><i class="bi bi-person-fill-gear me-2 i-icon"></i>Edit</a>
                        <a href="/" class="button-reset py-2 px-3 rounded text-decoration-none text-center"><i class="bi bi-person-fill-dash me-2 i-icon"></i>Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3671800912</td>
                      <td>Jojo Kusumo</td>
                      <td>Rekayasa Perangkat Lunak (RPL)</td>
                      <td>2021</td>
                      <td>KULIAH</td>
                      <td class="py-4 py-lg-3 d-flex flex-column flex-md-row gap-4 gap-md-3">
                        <a href="/siswa/edit" class="button py-2 px-3 rounded text-decoration-none text-center"><i class="bi bi-person-fill-gear me-2 i-icon"></i>Edit</a>
                        <a href="/" class="button-reset py-2 px-3 rounded text-decoration-none text-center"></i><i class="bi bi-person-fill-dash me-2 i-icon"></i>Hapus</a>
                      </td>
                    </tr>
                    <tr>
                      <td>3671800912</td>
                      <td>Jojo Kusumo</td>
                      <td>Rekayasa Perangkat Lunak (RPL)</td>
                      <td>2021</td>
                      <td>KULIAH</td>
                      <td class="py-4 py-lg-3 d-flex flex-column flex-md-row gap-4 gap-md-3">
                        <a href="/siswa/edit" class="button py-2 px-3 rounded text-decoration-none text-center"><i class="bi bi-person-fill-gear me-2 i-icon"></i>Edit</a>
                        <a href="/" class="button-reset py-2 px-3 rounded text-decoration-none text-center"><i class="bi bi-person-fill-dash me-2 i-icon"></i>Hapus</a>
                      </td>
                    </tr>
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