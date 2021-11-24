@extends('layouts_acc.main')
@section('content')
    <!-- content -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card card1 ">
                <div class="card card2 mb-2">
                    <div class="container">
                        <main class="form-registration">
                            <h1 class="card-title mt-3">Daftar dengan Akun Gratis</h1>
                            <form action="/register" method="POST">
                                @csrf
                                <div class="mb-3">
                                  <label for="name" class="form-label"></label>
                                  <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="Nama lengkap anda" autofocus required value="{{ old('name') }}">
                                </div>
                                <div class="mb-3">
                                  <label for="username" class="form-label"></label>
                                  <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="Username anda" required value="{{ old('username') }}">
                                </div>
                                <div class="mb-3">
                                  <label for="no_hp" class="form-label"></label>
                                  <input type="number" name="no_hp" class="form-control  @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Nomor telepon" required value="{{ old('no_hp') }}">
                                </div>
                                <div class="mb-3">
                                  <label for="alamat" class="form-label"></label>
                                  <input type="text" name="alamat" class="form-control  @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" required value="{{ old('alamat') }}">
                                </div>
                                <div class="mb-5">
                                  <label for="password" class="form-label"></label>
                                  <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Kata sandi">
                                </div>
                                <div class="mb-5">
                                    <select class="form-select mb-4" name="kepentingan" id="kepentingan" required>
                                        <option selected>Kepentingan</option>
                                        <option value="Pembuatan Furniture">Pembuatan Furniture</option>
                                        <option value="Pembuatan Kapal">Pembuatan Kapal</option>
                                        <option value="Pembuatan Cinderamata">Pembuatan Cinderamata</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-lg mt-3">Selanjutnya</button>
                                <a class="nav-link mt-3" href="/login" style="color: #727970">Sudah punya akun? Login !</a>
                              </form>
                        </main>
                    </div>
                </div>
                <h2>Dengan melanjutkan, Anda menyetujui Ketentuan Layanan dan Kebijakan Privasi</h2>
            </div>
        </div>
    </div>
    <!-- end content -->
@endsection
