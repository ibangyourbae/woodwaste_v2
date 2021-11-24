@extends('layouts_acc.main')
@section('content')
<!-- content -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="card card1 ">
      <div class="card card2 mb-2">
        <div class="container">
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" id="hide" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" id="hide" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script>
            $(document).ready(function() {

              $("#hide").click(function() {
                $(".alert").hide();
              });

            });
          </script>
          <main class="form-signin">
            <h1 class="card-title mt-3">Masuk ke akun Woodwaste Anda</h1>
            <form action="/login" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="name" placeholder="Username anda" autofocus required value="{{ old('username') }}">
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
              <div class="mb-2 form-check">
                <input type="checkbox" class="form-check-input" name="ingat" id="ingat">
                <label class="form-check-label" for="exampleCheck1" style="color: #727970">Biarkan saya tetap masuk</label>
              </div>
              <button type="submit" class="btn btn-lg mt-3">Masuk</button>
              <a class="nav-link mt-3" href="/register" style="color: #727970">Belum punya akun? Daftar !</a>
            </form>
          </main>
        </div>
      </div>
      <h2 style="text-align: center;">Dengan melanjutkan, Anda menyetujui Ketentuan Layanan dan Kebijakan Privasi</h2>
    </div>
  </div>
</div>
<!-- end content -->
@endsection