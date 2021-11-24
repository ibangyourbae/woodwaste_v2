@extends('layouts.main')
@section('content')
    <!-- content -->

    <div class="container layer1 ">


        <h1>Profile Akun Anda</h1>

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



        <div class="row mt-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-sm-12">
                <form method="POST" action="/dashboard/edit" class="mb-5">
                    @method('PUT')
                    @csrf
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control mb-3" value="{{ old('user',auth()->user()->name) }}">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control mb-3" value="{{ old('alamat',auth()->user()->alamat) }}">
                        <label for="no_hp" class="form-label">No HP</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ old('no_hp',auth()->user()->no_hp) }}">
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row mt-5">
            <div class="col-6"></div>
            <div class="col-6">
                <center>
                    <button class="btn btn1" type="submit">Simpan</button>
                </center>
            </div>
        </div>




    </div>


    </div>


<!-- end content -->
@endsection
