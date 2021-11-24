@extends('layouts.main')
@section('content')
<div class="container">
    <div class="container layer 2">
        <div class="row mt-5">
            <div class="card ">
                <div class="card-header text-center" style="background-color:#B3DAD5;">
                    Buat Toko Anda
                </div>
                <div class="card-body">
                    <form action="/allwood-create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="store_name" class="form-label @error('store_name') is-invalid @enderror">{{ $store->store_name }}</label>
                        <input class="form-control form-control-lg mt-3" type="text" id="store_name" name="store_name" value="{{ old('store_name',$store->store_name) }}">
                        @error('store_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label for="store_phone" class="form-label @error('store_phone') is-invalid @enderror">No HP Toko</label>
                        <input class="form-control form-control-lg mt-3" type="text" id="store_phone" name="store_phone" value="{{ old('store_phone') }}">
                        @error('store_phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <label for="store_address" class="form-label @error('store_address') is-invalid @enderror">Alamat</label>
                        <input class="form-control form-control-lg mt-3" type="text" id="store_address" name="store_address" value="{{ old('store_address') }}">
                        @error('store_address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Toko Anda</label>
                            <input class="form-control" type="file" id="image" name="image" required accept=".jpg, .png, .jpeg">
                        </div>
                        <button type="submit" class="btn mt-3" style="background-color:#B3DAD5;">Kirim</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection