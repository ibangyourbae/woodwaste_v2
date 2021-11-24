@extends('layouts_admin.main')
@section('content')

             <!-- Begin Page Content -->
             <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Hallo Admin Woodwaste !</h1>
                <p class="mb-4">Tabel berikut merupakan informasi data Woodpedia</p>
{{-- 
                <div class="alert alert-success" role="alert">
                    Data berhasil dihapus !
                </div>
                <div class="alert alert-success" role="alert">
                    Data berhasil diedit !
                </div>
                <div class="alert alert-danger" role="alert">Data gagal dihapus !
                </div>
                <div class="alert alert-danger" role="alert">Data gagal diedit !
                </div> --}}
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Informasi</h6>
                    </div>
                    <div class="card-body">
                        <a href="/admin/woodpedia/create" class="btn btn-primary mb-3">Tambah Woodpedia</a>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Link Artikel</th>
                                        <th>Ubah / Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($woodpedia as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td><a href="{{ $data->link }}">{{ $data->link }}</a></td>
                                        <td>

                                            <a href="/admin/woodpedia/{{ $data->id }}/edit" class="btn btn-warning btn-circle">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            &ensp;
                                            <form action="/admin/woodpedia/{{ $data->id }}/delete" method="POST" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                  <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Apakah anda yakin  ?')">                                                
                                                    <i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection