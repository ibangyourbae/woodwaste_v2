@extends('layouts.main')
@section('content')
    <!-- content -->

    <div class="container layer1 ">
        
        <form method="POST" action="/profile" class="mb-5">
            @method('PUT')
            @csrf
        <div class="row mt-5">
            <h1>Profile Akun Anda</h1>
            @if(auth()->user()->image)
                <div class="row mt-5">
                    <div class="col-lg-3 "></div>
                    <div class="col-lg-3 col-sm-12">
                        <center>
                            <img src="../img/codicon_account.png" alt="" width="100" height="100" style="border-radius: 100%;">
                        </center>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <center>
                            <button class="btn btn1" type="submit">Ubah Foto</button><br>
                            <button class="btn btn2 mt-4" type="submit">Hapus Foto</button>
                        </center>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            @else
                <div class="row mt-5">
                    <div class="col-lg-3 "></div>
                    <div class="col-lg-3 col-sm-12">
                        <center>
                            <img src="../img/codicon_account.png" alt="" width="100" height="100" style="border-radius: 100%;">
                        </center>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <center>
                                <label for="image" class="form-label">Gambar Toko Anda</label>
                                <input class="btn btn1" type="file" id="image" name="image" >
                            
                            <button class="btn btn2 mt-4" type="submit">Hapus Foto</button>
                        </center>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            @endif

            
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-sm-12">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control mb-3" value="{{ old('user',auth()->user()->name) }}">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control mb-3" value="{{ old('alamat',auth()->user()->alamat) }}">
                        <label for="no_hp" class="form-label">No HP</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ old('no_hp',auth()->user()->no_hp) }}">

            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row mt-5">
            <div class="col-6"></div>
            <div class="col-6">
                <center>
                    <a href="/profile/{{ auth()->user()->username }}/edit" class="btn btn1">Ubah Data</a

                </center>
            </div>
        </div>
        </form>




    </div>


</div>


<!-- end content -->
@endsection
