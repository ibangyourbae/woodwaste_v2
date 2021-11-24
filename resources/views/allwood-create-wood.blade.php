@extends('layouts.main')
@section('content')
<div class="container">
    <div class="container layer 2">
        <div class="row mt-5">
            <div class="card ">
                <div class="card-header text-center" style="background-color:#B3DAD5;">
                    Tambah Kerajinan Anda
                </div>
                <div class="card-body">
                    <form action="/allwood-create-wood" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="wood_name" class="form-label @error('wood_name') is-invalid @enderror">Nama Kerajinan</label>
                        <input class="form-control form-control-lg mt-3" type="text" id="wood_name" name="wood_name" value="{{ old('wood_name') }}">
                        @error('wood_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label for="stock" class="form-label @error('stock') is-invalid @enderror">Stok Kerajinan</label>
                        <input class="form-control form-control-lg mt-3" type="number" id="stock" name="stock" value="{{ old('stock') }}">
                        @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label for="price" class="form-label @error('price') is-invalid @enderror">Harga Kerajinan</label>
                        <input class="form-control form-control-lg mt-3" type="number" id="price" name="price" value="{{ old('price') }}">
                        @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Kerajinan Anda</label>
                            <input class="form-control" type="file" id="image" name="image" required accept=".jpg, .png, .jpeg">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Deskripsi </label>
                            @error('body')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                            <trix-editor input="body"></trix-editor>
                        </div>
                        <button type="submit" class="btn mt-3" style="background-color:#B3DAD5;">Kirim</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>




@endsection